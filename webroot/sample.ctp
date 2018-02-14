<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= h($this->fetch('title')) ?></title>
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<?php
echo $this->Html->css('sample.css');
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
<body>
<div id="header"><?php echo ($header) ?></div>
 
<?= $this->fetch('content') ?>
 
<div id="footer"><?= ($footer) ?></div>
</body>
</html>