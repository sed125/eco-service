<?php
session_start();
$customer = $_SESSION['customer'];
echo  ' ' . $customer['name'] . ' ' . $customer['email'];
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


<div class="row text-center">
    <div class="col-md-4">
        <a href="../deconnexion.php" class="btn btn-primary">deco</a>
    </div>
    <div class="col-md-4">
        <form method="POST" action="../controller/CustomerController.php">
            <label>Nom complet :<input class="form-control" type="text" name="name" value="<?=$customer['name']?>"></label><br>
            <label>Email :<input class="form-control" type="text" name="email" value="<?=$customer['email']?>"></label><br>
            <label>Mot de passe actuel :<input class="form-control" type="text" name="current-password"></label><br>
            <label>Nouveau mot de passe :<input class="form-control" type="text" name="password"></label><br>
            <label>Confirmer nouveau mot de passe :<input class="form-control" type="text" name="password-repeat"></label><br>
            <label>Numéro de téléphone :<input class="form-control" type="number" name="phone" value="<?=$customer['phone']?>"></label><br>
            <button type="submit" name="formModif" class="btn btn-primary">Modifier profil</button>
        </form> 
    </div>
</div>
