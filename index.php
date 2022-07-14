<?php include"exchange.php"?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title> USD EURO Exchange Rates </title>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">


</head>
<style>
    html,
body {
    background-image: url("back.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
}
.str{
    color: white;
    text-align: center;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  
}
.red{
    background-color: #F36935;
}
</style>
<body>
<h1 class="str">USD EURO Exchange Rates</h1>
    <marquee border="0" class="red" scrolldelay="60" style="width: 100%;" scrollamount="4"  behavior="alternate"><div class="col-md-4 str">
        <h1>USD <?php echo $str1 ?></h1>
    </div>

    <div class="col-md-4 str">
        <h1>EUR <?php echo $str2 ?></h1>
  
    </div></marquee>
</body>
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</html>


