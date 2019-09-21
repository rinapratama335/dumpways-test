<?php
  include('koneksi.php');
?>
<!DOCTYPE html>
<html>
  <head>
  	<title>Dumpways Test</title>
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  </head>
  <body>
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#list">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Dumpways Test</a>
    </div>
  </nav>
  <?php 
    $sql=mysqli_query($konek,"SELECT posts.title, posts.id, posts.content, users.username FROM posts, users WHERE posts.createdBy=users.id") or die (mysqli_error());
    while($data = mysqli_fetch_array($sql)){
    $postid=$data['id'];
  ?>
    <div class="container">
      <div class="jumbotron">
        <h2 align="center"><b><?php echo $data['title'] ?></h1> 
        <p><?php echo $data['content'] ?></p> 
        <p class="created">Dibuat oleh : <b><?php echo $data['username'] ?></b></p>
      </div>
      <p>Comments :</p>
      <ul class="comment">
        <?php
          $comment=mysqli_query($konek,"SELECT * FROM comments WHERE comments.postId=$postid") or die (mysql_error());
          while($datac = mysqli_fetch_array($comment)) {
        ?>
      	<li><?php echo $datac['comment'] ?></li>
        <?php } ?>
      </ul>
    </div>
  <?php 
  }
  ?>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-2.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>