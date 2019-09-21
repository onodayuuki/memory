<?php
    $number = "こんにちは";

    echo $number;
?>

<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<title>思い出</title>
</head>
<body>
<?php require('header.php'); ?>
<div class="contentsArea">
    <div class="menuArea">
        <ul>
        	<li><a class="active" href="index.php?number=0">ホーム</a></li>
        	<li><a href="index.php?number=1">2019年編</a></li>
        	<li><a href="index.php?number=2">2018年編</a></li>
        	<li><a href="index.php?number=3">2017年編</a></li>
        	<li><a href="index.php?number=4">2016年編</a></li>
        	<li><a href="index.php?number=5">2015年編</a></li>
        </ul>
	</div>
	<div class="mainArea">
		<?php if($number == "0"){ ?>

		<?php }else{ ?>
			<h1><?php echo $title; ?></h1>
			<?php echo $document; ?>
		<?php } ?>
	</div>
</div>
<?php require('footer.php'); ?>
</body>
</html>
