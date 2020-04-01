<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Northrifth Women in STEM </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favico.ico">

        <!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/gijgo.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">

            <!-- add blog -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />

            <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
            <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

            <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
            <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        </head>

   <body>
    <header>
        <!-- Header Start -->
            <?php include 'header.php'; ?>
        <!-- Header End -->
    </header>
    <main>
         <div class="wantToWork-area w-padding">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-xl-6 col-lg-8 col-md-8">
                        <div class="wantToWork-caption">
                             <button  type="button" class="btn btn-info">Add Blog</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       
                        <!-- New Blog Post - START -->
                        <div class="container">
                            <div class="row" id="row_style">
                                <!-- <h4 class="text-center">Submit new post</h4> -->
                                <div class="col-md-4   col-md-offset-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Title">
                                    </div>
                                    <textarea id="editor" cols="30" rows="10">Submit your text post here...</textarea>
                                    <br>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Tags">
                                    </div>
                                 <!--    <div class="form-group">
                                        <button class="btn btn-primary" id="submit">Submit new post</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                       
                        <!-- New Blog Post - END -->

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>

   

         
        
    </main>
   <footer>
       <!-- Footer Start-->
       <?php include 'footer.php'; ?> 
       <!-- Footer End-->
   </footer>
   
    <!-- JS here -->
    
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
        <!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
        
        <!-- Jquery, Popper, Bootstrap -->
        <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
        <script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
        <script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
        <!-- Jquery Plugins, main Jquery -->    
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>