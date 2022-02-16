<?php
if(isset($_GET['envoyer']))
{
    if(empty($_GET['nom'])|| empty($_GET['prenom'])|| empty($_GET['email']) || empty($_GET['telephone']) || empty($_GET['adresse']) )
    {
        echo('<p ><strong>Champs manquant</strong></p>');
    }
    else
    {

    $nom=$_GET['nom'];
    $prenom=$_GET['prenom'];
    $email=$_GET['email'];
    $telephone=$_GET['telephone'];
    $adresse=$_GET['adresse'];
    $codepostal=$_GET['codepostal'];
    echo(
        '<table border="1"> 
            <tr>
              <th> Nom </th>
              <th> Prenom </th>
              <th> Email </th>
              <th> Tel </th>
              <th> Adresse </th>
              <th> Code Postal </th>
            </tr>
            <tr>
              <td>'.$nom.'</td>
              <td>'.$prenom.'</td>
              <td>'.$email.'</td>
              <td>'.$telephone.'</td>
              <td>'.$adresse.'</td>
              <td>'.$codepostal. '</td>
            </tr>
        </table> '
        );
    }

};
?>

