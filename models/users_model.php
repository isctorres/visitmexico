<?php
class USERMODEL
{
    private $id_usuario;
    private $nom_usuario;
    private $app_usuario;
    private $apm_usuario;
    private $email_usuario;
    private $nickname;
    private $password;

    public function __construct($nom_usuario,$app_usuario,$apm_usuario,$email_usuario,$nickname,$password){
        $this->nom_usuario = $nom_usuario;
        $this->app_usuario = $app_usuario;
        $this->apm_usuario = $apm_usuario;
        $this->email_usuario = $email_usuario;
        $this->nickname = $nickname;
        $this->password = $password;
    }
    public function INSUSER($mysql){
        $sql = "INSERT INTO tbl_usuarios (nom_usuario,app_usuario,apm_usuario,email_usuario,nickname,password) ";
        $sql.= "VALUES('".$this->nom_usuario."','".$this->app_usuario."','".$this->apm_usuario."'";
        $sql.= ",'".$this->email_usuario."','".$this->nickname."','".$this->password."')";
        if($mysql->query($sql)) echo 'Usuario insertado';
        else echo 'Ocurrio un error...';
    }
    public function UPDUSER(){}
    public function DELUSER(){}
    public function GETUSER(){}
    public function GETALLUSER(){}

}
?>