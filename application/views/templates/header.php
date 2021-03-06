<html>
	<head>
		<title>DailyJournal</title>
		<link rel="stylesheet" href="https://bootswatch.com/slate/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css ">
    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
	</head>
<body>
  <nav class="navbar navbar-default">
   <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">Daily Journal</a>
    </div>
    <div>
   	 <ul class="nav navbar-nav">
     	 <li ><a href="<?php echo base_url(); ?>">Home</a></li>
     	 <li ><a href="<?php echo base_url(); ?>posts">Posts</a></li>
       <li ><a href="<?php echo base_url(); ?>categories/index">Category</a></li>
       <li ><a href="<?php echo base_url(); ?>about">About</a></li>
   	 </ul>
     <ul class="nav navbar-nav navbar-right">
       <li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
       <li><a href="<?php echo base_url(); ?>users/register">Sign Up</a></li>
       <li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
       <li><a href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
     </ul>
  </div>
</nav>

<div class= "container">
    <?php if($this->session->flashdata('user_registered')): ?>
          <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif ?>

    <?php if($this->session->flashdata('post_created')): ?>
          <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
    <?php endif ?>

    <?php if($this->session->flashdata('post_updated')): ?>
          <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
    <?php endif ?>

    <?php if($this->session->flashdata('post_deleted')): ?>
          <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
    <?php endif ?>

