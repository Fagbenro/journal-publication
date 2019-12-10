<!doctype html>
<html lang="en">

<!-- Mirrored from jumbo-admin.g-axon.work/basic-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:05:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="description" content="Jumbo - A fully responsive, HTML5 based admin theme">
    <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass"> -->
    <title>Nigerian Association of Clinical Psychologists | Admin</title>
    <!-- Site favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='/adminassets//adminassets/images/favicon.ico' />
    <!-- /site favicon -->

    <!-- Font Material stylesheet -->
    <link rel="stylesheet" href="/adminassets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- /font material stylesheet -->

    <!-- Bootstrap stylesheet -->
    <link href="/adminassets/css/jumbo-bootstrap.css" rel="stylesheet">
    <!-- /bootstrap stylesheet -->

    <!-- Perfect Scrollbar stylesheet -->
    <link href="/adminassets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- /perfect scrollbar stylesheet -->

    <!-- Jumbo-core stylesheet -->
    <link href="/adminassets/css/jumbo-core.min.css" rel="stylesheet">
    <!-- /jumbo-core stylesheet -->

    <!-- Color-Theme stylesheet -->
    <link id="/adminassets/override-css-id" href="css/theme-dark-indigo.css" rel="stylesheet">
    <!-- Color-Theme stylesheet -->

</head>

<body id="body" data-theme="dark-indigo">

<!-- Loader Backdrop -->
<div class="loader-backdrop">
    <!-- Loader -->
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
        </svg>
    </div>
    <!-- /loader-->
</div>
<!-- loader backdrop -->

<!-- Page container -->
<div class="gx-container">

    <!-- Page Sidebar -->
@include('adminsidebar')
    <!-- /page sidebar -->

    <!-- Main Container -->
    <div class="gx-main-container">

        <!-- Main Header -->
     @include('adminheader')
        <!-- /main header -->

        <!-- Main Content -->
        <div class="gx-main-content">
            <!--gx-wrapper-->
            <div class="gx-wrapper">
                <div class="page-heading d-sm-flex justify-content-sm-between align-items-sm-center">
                    <h2 class="title mb-3 mb-sm-0">SEND EMAIL (CONFERENCE 2019)</h2>
                    <nav class="mb-0 breadcrumb">
                        <a href="/admin" class="breadcrumb-item">Dashboard</a>
                       
                        <span class="active breadcrumb-item">Conference 2019 (Send Mail)</span>
                    </nav>
                </div>
              
                <div class="row">
                  
                </div>
                <div class="row">
                    <div class="col-lg-12">
                         
                        
                           

        <div class="modal-content">
            <div class="modal-box-content d-flex flex-column">
                @include('success')
                <form  method="post" action="/admin/sendmailconference">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" id="exampleInputTo" placeholder="To*" value="{{ $writer->email }}" readonly>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputSubject" name="title" placeholder="Subject" required>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Message" name="message" required></textarea>
                    </div>
                    <div class="modal-box-footer">
               <!--  <p class="mb-0">
                    <a class="gx-btn gx-flat-btn" href="javascript:void(0)">
                        <i class="zmdi zmdi-attachment"></i>
                        <span>Attach File</span>
                    </a>
                </p> -->
                <button type="submit"  class="gx-btn gx-btn-primary"><i class="zmdi zmdi-mail-send"></i><span>Send Mail</span></button>
              
            </div>
            </form>
            </div>
           
        </div>

                              <!--   <form>
                                    <div class="form-group row">
                                        <label for="colFormLabelLg" class="col-md-2 col-sm-3 control-label control-label-lg">Send To </label>
                                        <div class="col-md-10 col-sm-9">
                                            <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="placeholder" value="" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="colFormLabelLg" class="col-md-2 col-sm-3 control-label control-label-lg"> Subject</label>
                                        <div class="col-md-10 col-sm-9">
                                            <input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Subject">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="colFormLabelLg" class="col-md-2 col-sm-3 control-label control-label-lg"> Compose Message</label>
                                        <div class="col-md-10 col-sm-9">
                                          <textarea class="form-control form-control-lg"></textarea>
                                        </div>
                                    </div>
                                    
                                </form> -->
                                
                   
                    </div>
                </div>
                
            </div>
            <!--/gx-wrapper-->

            <!-- Footer -->
            <footer class="gx-footer">
                <div class="d-flex flex-row justify-content-between">
                    <p> NAIOP © 2019</p>
                   
                </div>
            </footer>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /main container -->

    <!-- Theme Options Button -->
    
    <!-- /Theme Options Button -->

</div>
<!-- /page container -->

<!-- Right Sidebar-->

<!-- /Right Sidebar-->

<!-- Menu Backdrop -->
<div class="menu-backdrop fade"></div>
<!-- /menu backdrop -->

<!--Load JQuery-->
<script src="/adminassets/node_modules/jquery/dist/jquery.min.js"></script>
<!--Bootstrap JQuery-->
<script src="/adminassets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--Perfect Scrollbar JQuery-->
<script src="/adminassets/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<!--Big Slide JQuery-->
<script src="/adminassets/node_modules/bigslide/dist/bigSlide.min.js"></script>
<!--Custom JQuery-->
<script src="/adminassets/js/functions.js"></script>

</body>

<!-- Mirrored from jumbo-admin.g-axon.work/basic-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:05:54 GMT -->
</html>

