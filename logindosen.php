<?php
session_start();
include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dosen | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h4>Login Sebagai Dosen</h4>
               
                <h5>( Login yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <div class="panel panel-default">
              <div class="panel-heading">
                <strong>   Enter Details To Login </strong>  
              </div>
              <div class="panel-body">
                <form role="form" method="post" action="proseslogindosen.php">
                 <br />
                 <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                  <input type="text" class="form-control" name="username" />
                </div>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                  <input type="password" class="form-control"  name="password" />
                </div>
                <div class="form-group">
                  <label class="checkbox-inline">
                    <input type="checkbox" /> Remember me
                  </label>
                  <span class="pull-right">
                   <a href="#" >Forget password ? </a> 
                 </span>
               </div>

               <button type="submit" class="btn btn-primary" name="logindosen">Login</button>
               <hr />
               Not register ? <a href="register.php" >click here </a> 
             </form>
