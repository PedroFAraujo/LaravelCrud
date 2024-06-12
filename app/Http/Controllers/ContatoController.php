<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    // Função para listar todos os contatos
    public function index(Request $req){
        $contato = Contato::all(); // Obtém todos os registros da tabela 'contatos'
        return view('index')->with("contato", $contato); // Retorna a view 'index' com os contatos obtidos
    }

    // Função para cadastrar um novo contato
    public function cadastrar(Request $req){
        $contato = new Contato; // Cria uma nova instância do modelo Contato
        // Definição dos campos do contato com os valores vindos da requisição
        $contato->nome = $req->nome;
        $contato->telefone = $req->telefone;
        $contato->email = $req->email;
        $contato->save(); // Salva o contato no banco de dados
        return redirect()->back(); // Redireciona o usuário de volta para a página anterior
    }

    // Função para carregar a view de edição com os dados de um contato específico
    public function editar(Request $req){
        $contato = Contato::find($req->id); // Busca o contato pelo ID vindo da requisição
        return view('editar')->with("contato", $contato); // Retorna a view 'editar' com os dados do contato encontrado
    }

    // Função para atualizar os dados de um contato existente
    public function atualizar(Request $req){
        $contato = Contato::find($req->id); // Busca o contato pelo ID vindo da requisição
        $contato->update( // Atualiza os dados do contato com os valores vindos da requisição
            [
                "nome" => $req->nome,
                "telefone" => $req->telefone,
                "email" => $req->email
            ]
        );
        return redirect('/'); // Redireciona o usuário para o index
        
    }

    // Função para excluir um contato
    public function excluir(Request $req){
        $contato = Contato::find($req->id); // Busca o contato pelo ID vindo da requisição
        $contato->delete(); // Deleta o contato encontrado
        return redirect()->back(); // Redireciona o usuário de volta para a página anterior
    }
}
