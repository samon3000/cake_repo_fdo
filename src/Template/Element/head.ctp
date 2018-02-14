<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta name="format-detection" content="telephon=no">
  <meta name="description" content="">
  <meta name="keywords" content="" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <?php
  echo $this->Html->css('dest/reset.min.css');
  echo $this->Html->css('dest/base.min.css');
  echo $this->Html->css('dest/common.min.css');
  echo $this->Html->css('dest/top.min.css');
  echo $this->fetch('meta');
  echo $this->fetch('css');
  echo $this->fetch('script');
  ?>

  <title>不動産ドットコム</title>
</head>