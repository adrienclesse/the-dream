<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <style type="text/css"></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>The-Dream-Currency</title>
</head>
<body>
    <div class="converting">
        <h1>Brazil : A useful converter </h1>
        <h4>Convert the price of your cocktail and avoid getting ripped off</h4>
            <p> Brasilian Reais :</p>
            <form  method="post">
            <div class="input-group">
                <input type="number" class="form-control" name="amount">
   <div class="input-group-append">
       <span class="input-group-text"> R$ </span>
   </div>   
</div>
<br>
<button id=convert name="convert">Convert</button>
<br><br>
    <p>Euros :</p>
    <div class="input-group">
   <input type="number" class="form-control" name="result">
   <div class="input-group-append">
       <span class="input-group-text"> € </span>

   </div>
   </form>
</div>
    
    </div>

<?php 
//if(isset($_POST['convert'])){
//$amount = $_POST['amount'];
//echo $amount*2
//}
?>

</body>
</html>