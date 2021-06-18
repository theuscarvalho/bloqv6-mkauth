<?php
#########################################
#   - Autor: Matheus Carvalho           #
#   - Consultor em Telecom              #
#   - (79) 99998-9976                   # 
#########################################
$hostname = "localhost";
$bancodedados = "mkradius";
$usuario = "root";
$senha = "vertrigo";
$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$sql = "select id, nome_res, cli_ativado, ramal, login, bloqueado from sis_cliente where bloqueado = 'sim'";
$con_sql = $mysqli->query($sql);;

while ($dados_sql = $con_sql->fetch_array()) {
   $id      = $dados_sql['id'];
   $nome    = $dados_sql['nome_res'];
   $ativo   = $dados_sql['cli_ativado'];
   $usuario = $dados_sql['login'];
   $CliNas  = $dados_sql['ramal'];
     $stmt = $mysqli->prepare('SELECT nasname, shortname, portassh, secret FROM nas WHERE nasname = ?');
     $stmt -> bind_param('s', $CliNas);
     $stmt -> execute();
     $stmt -> store_result();
     $stmt -> bind_result($nasname, $shortname, $portassh, $secret);
     $stmt -> fetch();

if ($ativo == 's'){
$key = "-i /root/.ssh/id_dsa";
shell_exec("sudo ssh -l mkauth $nasname -p $portassh \"ipv6 firewall address-list add list=BloqV6 comment=$usuario address=[/ipv6 pool used get [find info=$usuario] prefix]\" ");
 }
}
?>
