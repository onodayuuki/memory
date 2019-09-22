<?php
    $number = "";

    if(isset($_GET['number'])){
        $number = $_GET['number'];

        if($number == '0'){

        }else if($number <> '0'){
            $url = "json/data.json";
            $json = file_get_contents($url);
            $json = mb_convert_encoding($json, 'UTF8','ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
            $arr = json_decode($json,true);

            $title = $arr["data"][$number][$number][0]["title"];
            $document = $arr["data"][$number][$number][0]["document"];
        }
    }
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