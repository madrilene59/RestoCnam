<?php
if(session_status() == PHP_SESSION_NONE){
  session_start();
}
?><!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Header</title>
  <link href="../css/Resto_Cnam.css" rel="stylesheet">
</head>

<body class="center">
  <table width="80%" align="center">
    <tr>
      <td width="9%" rowspan="2" ><img src="../web/images/logo_header.png"  alt="logo Resto Cnam"/></td>
      <td width="91%" colspan="3" align="center"><strong>Le projet présenté dans le cahier des charges ici présenté est un exercice de formation.</strong></td>
    </tr>
    <tr>
      <td><form>formulaire de recherche a definir</form>
      </td>
      <td align="right"><a href="#">Inscription</a> 
        <a href="#">Connexion</a></td>
        
      </tr>
    </table>
    <br>
  </body>
  </html>
