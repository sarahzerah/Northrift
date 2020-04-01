<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" />
    <title>Nortrift Women in STEM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

     <link rel="manifest" href="site.webmanifest">
     <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favico.ico">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<div class="container">
   <div class="col-xl-2 col-lg-1 col-md-1">
    <div class="logo">
    <a href="index.html"><img src="../assets/img/logo/NR-in-STEM.png" height="50px" width="150px" alt=""></a>
    </div>
</div>
<div class="page-header">
 
    <!-- <h1><small>A responsive blog post template</small></h1> -->
</div>
<!-- New Blog Post - START -->
<div class="container">
    <div class="row" id="row_style">
        <h4 class="text-center">Submit new post</h4>
        <div class="col-md-4   col-md-offset-4">
         <form action="addblog.php" method="post">
            <div class="form-group">
                <input type="text" name="postTitle" class="form-control" placeholder="Title" required="">
            </div>
            <div>
                 <input type="file" name="postImg"> <br>
            </div>
            <textarea id="editor" name="postCont" cols="47" rows="10" required="">Submit your text post here... </textarea>
            <br>
            <div class="form-group">
                <input type="date" name="postDate"  class="form-control" placeholder="date" required="">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="submit" id="submit">Submit new post</button>
            </div>
        </form>
        </div>
    </div>
</div>
</div>


<style>
    #row_style {
        margin-top: 30px;
    }

    #submit {
        display: block;
        margin: auto;
    }
</style>

<!-- you need to include the shieldui css and js assets in order for the charts to work -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<script>
    $(function () {
        $("#editor").shieldEditor({
            height: 260
        });
    })
</script>
<!-- New Blog Post - END -->

   <!--  <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Contact Form</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="addblog.php" method="post">
 
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="postTitle" class="form-control">
                        </div>
 
                        <div class="form-group">
                            <label>Blog</label>
                            <textarea name="postCont" type="text" class="form-group"></textarea>
                            
                        </div>
 
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="date" name="postDate" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div> -->
</body>
</html>