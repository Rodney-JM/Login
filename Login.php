<?php 

class Login{
    private const user_email = 'rodney@gmail.com';
    private const user_password = '12345';
    private bool $userMailValidate;
    private bool $user_passWordValidate;

    public string $nome;

    public function __construct($nome){
        $this->nome = $nome;
        $this->user_passWordValidate = self::user_password===$_GET['user_senha'];
        $this->userMailValidate = self::user_email===$_GET['user_mail'];
    }

    public function validarLogin(){
        if($this->userMailValidate && $this->user_passWordValidate){
            echo "Seja Bem vindo(a) " . $this->nome;
            return;
        }

        header('Location:index.php?msgError=<b>Usuário ou senha errados</b>');
    }
}    