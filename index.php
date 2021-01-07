<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <style type="text/css"></style>
    <title>The-Dream-Currency</title>
</head>
<body>

<?php
ini_set('display_errors','1');
if(isset($_POST['convert'])){
$amount=$_POST['amount'];
$country=$_POST['country'];

if($country=="EUR"){
    $result=$amount*0.15."€";
    $currency= "€";
}

if($country=="AUD"){
    $result=$amount*0.24."AU$";
    $currency= "AU$";
}
if($country=="USD"){
    $result=$amount*0.19."$";
    $currency= "$";
}
}


?>
    <div class="converting">
        <h1>Brazil : A useful converter </h1>
        
        <p> Brasilian Real :</p>
        <form  method="post">
        
            <div class="input-group">
            <input type="number" step="0.01" class="input" placeholder="0.00" name="amount">
                <div class="input-group-append">
                    <span class="input-group-text"> R$ </span>
                </div>   
            </div>
            <br>
            <button id=convert name="convert">Convert</button>
            <br><br>
            <select id="country" name="country">
            <option name='USD' value="USD">USA</option>
            <option name='EUR' value="EUR">EURO</option>
            <option name='AUD' value="AUD">Australia</option>
        
         </select>
         <br><br>
            <div class="input-group">
            <input type="number" step="0.01" class="input"  name="euros" placeholder=<?php echo $result ?> >
                <div class="input-group-append">
                    <span class="input-group-text"> <?php echo $currency ?>  </span>
                </div>
            </div>
        </form>
    </div>
    
    



</body>
</html>