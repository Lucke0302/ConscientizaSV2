<?php 
include("conexao.php");
class Cadastro extends Conexao{
    private $nome;
    private $nasc;
    private $email;
    private $senha;
    private $tipo;

    public function __construct($nome, $nasc, $email, $senha, $tipo)
    {
        $this->nome = $nome;
        $this->nasc = $nasc;
        $this->email = $email;
        $this->senha = $senha;
        $this->tipo = $tipo;
    }

    public function verificarCadastro(){
        $verificar = $this->getConexao() -> prepare("select cd_pessoa from tb_pessoa where ds_email = :email");
        $verificar -> bindValue(':email', $this->email);
        $verificar -> execute();
        $qtlinhas = $verificar -> rowCount();
        if($qtlinhas != 0){
            return false;
        }
        else if($qtlinhas == 0){
            return true;
        }
    }

    public function Cadastro(){
        if($this->verificarCadastro() == true){
            $cadastro = $this->getConexao() -> prepare("insert into tb_pessoa (ds_nome, dt_nasc, ds_email, ds_senha, nm_tipo) values (:nome, :nasc, :email, :senha, :tipo)");
            $cadastro -> bindValue(':nome', $this->nome);
            $cadastro -> bindValue(':nasc', $this->nasc);
            $cadastro -> bindValue(':email', $this->email);
            $cadastro -> bindValue(':senha', $this->senha);
            $cadastro -> bindValue(':tipo', $this->tipo);
            $cadastro -> execute();
            $cadastro -> closeCursor();
            header('location: ../../view/login/');
        }    
        else if($this->verificarCadastro() == false){
            echo "<p id='msg'>Usuário já existente para esse endereço de email: ". $this->email. "</p><br>
                  <button onclick='../view/cadastro/'>Voltar para o cadastro</button>";
        }
    }
}
?>