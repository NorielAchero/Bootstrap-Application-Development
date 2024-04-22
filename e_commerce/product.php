<!DOCTYPE html>
<html>
  <head>
    <!-- Noriel Achero | 3 BSCS 2 -->
    <title>PRODUCT</title>
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    

    </head>
    <body>
      
        <nav class = "navbar navbar-inverse">
            <div class = "container-fluid">
                <div class = "navbar-header">
                    <button type = "button" class = "navbar-toggle" data-toggle="collapse" data-target = "#myNavbar">
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>
                    <a class = "navbar-brand" href = "#">E-Commerce</a>
                </div>
                <div class = "collapse navbar-collapse" id = "myNavbar">
                    <ul class = "nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="games.php">Games</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <aside class="col-md-4">
            <div class="col-md-10 col-md-offset-1">
                <div class="list-group">
                    <a href="product.php" class="list-group-item" style="padding:0; margin:0;">
                        <div class="col-md-3" style="padding:0; margin:0;">
                            <img src="image/1.jpg" style="width:80px;height:100px;">
                        </div>
                        <div class="col-md-9">
                            <div class="list-group-item-heading">
                                <h4>Php: 5,000,000</h4>
                                <h4>Sports Car</h4>
                                <div class="clearfix"></div>
                            </div>
                            <p class="list-group-item-text">Lorem ipsum dolord do eiusmod</p>
                        </div>	
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>
    
            <div class="col-md-10 col-md-offset-1">
                <div class="list-group">
                    <a href="product.php" class="list-group-item" style="padding:0; margin:0;">
                        <div class="col-md-3" style="padding:0; margin:0;">
                            <img src="image/2.jpg" style="width:80px;height:100px;">
                        </div>
                        <div class="col-md-9">
                            <div class="list-group-item-heading">
                                <h4>Php: 7,000,000</h4>
                                <h4>Sports Car</h4>
                                <div class="clearfix"></div>
                            </div>
                            <p class="list-group-item-text">Lorem ipsum dolord do eiusmod</p>
                        </div>	
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>	
    
            <div class="col-md-10 col-md-offset-1">
                <div class="list-group">
                    <a href="product.php" class="list-group-item" style="padding:0; margin:0;">
                        <div class="col-md-3" style="padding:0; margin:0;">
                            <img src="image/3.jpg" style="width:80px;height:100px;">
                        </div>
                        <div class="col-md-9">
                            <div class="list-group-item-heading">
                                <h4>Php: 3,000,000</h4>
                                <h4>Sports Car</h4>
                                <div class="clearfix"></div>
                            </div>
                            <p class="list-group-item-text">Lorem ipsum dolord do eiusmod</p>
                        </div>	
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>	
    
            <div class="col-md-10 col-md-offset-1">
                <div class="list-group">
                    <a href="product.php" class="list-group-item" style="padding:0; margin:0;">
                        <div class="col-md-3" style="padding:0; margin:0;">
                            <img src="image/4.jpg" style="width:80px;height:100px;">
                        </div>
                        <div class="col-md-9">
                            <div class="list-group-item-heading">
                                <h4>Php: 9,000,000</h4>
                                <h4>Sports Car</h4>
                                <div class="clearfix"></div>
                            </div>
                            <p class="list-group-item-text">Lorem ipsum dolord do eiusmod</p>
                        </div>	
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>			
        </aside>

        <header class = "col-md-8">
            <div class = "col-md-12">
                <div class = "thumbnail">
                    <img src = "image/1.jpg" style = "width: 100%;">
                        <div class = "caption">
                            <h4 class = "pull-right">Php: 5,000,000</h4>
                            <h4><a href="product.php">Sports Car</a></h4>
                            <div><button class="btn btn-primary" data-target="#buy_me" data-toggle="modal" style="margin-left:10px; margin-bottom:10px;">Buy this car</button></div>
                            <div class="modal fade" id="buy_me">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button class="close" data-dismiss="modal">&times;</button>
                                            <h2 class="modal-title">Buy Car</h2>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-lg" placeholder="Enter Your Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control input-lg" placeholder="Enter Your Email">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-lg" placeholder="Contact No.">
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="5" style="font-size:20px color:gray;">Address...</textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-dismiss="modal">Submit Order</button>
                                        
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Donec massa sapien faucibus et molestie ac feugiat. Nibh nisl condimentum id venenatis a condimentum vitae sapien. Morbi tincidunt augue interdum velit. Mauris cursus mattis molestie a iaculis at erat pellentesque. Blandit turpis cursus in hac habitasse. Nulla facilisi morbi tempus iaculis urna id volutpat. Dolor sed viverra ipsum nunc aliquet. Aenean et tortor at risus viverra adipiscing at in. Lorem sed risus ultricies tristique nulla aliquet enim tortor at. Curabitur vitae nunc sed velit dignissim. Amet massa vitae tortor condimentum lacinia. Nec dui nunc mattis enim ut tellus.</p>
                        </div>
                </div>
            </div>
        </header>

        <div class="col-md-8 col-md-offset-4">
            <div class="col-md-12">
                <div class="well">
                    <div class="text-right">
                        <button class="btn btn-danger">Leave Comments</button>
                    </div>
                </div>
                
                <div class="well">
                    <span class="lead">Noriel</span>
                    <span class="pull-right">3 days ago</span><hr/>
                    <p>Nice Car!</p>
                </div>
                
                <div class="well">
                    <span class="lead">Achero</span>
                    <span class="pull-right">3 days ago</span><hr/>
                    <p>Nice Car!</p>
                </div>
                
                <div class="well">
                    <span class="lead">Leiron</span>
                    <span class="pull-right">3 days ago</span><hr/>
                    <p>Nice Car!</p>
                </div>
                
                <div class="well">
                    <span class="lead">Orecha</span>
                    <span class="pull-right">3 days ago</span><hr/>
                    <p>Nice Car!</p>
                </div>
            </div>
        </div>
  
  
        <div class="container">
            <div class="page-header"><h3 class="text-center">All Products</h3></div>
        <div class = "col-md-3">
            <div class = "thumbnail col-md-10 col-md-offset-1">
                <img src = "image/1.jpg" style = "width: 100%;">
                    <div class = "caption">
                        <h4 class = "pull-right">Php: 5,000,000</h4>
                        <h4><a href="product.php">Sports Car</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Donec massa sapien faucibus et molestie ac feugiat. Nibh nisl condimentum id venenatis a condimentum vitae sapien. Morbi tincidunt augue interdum velit. Mauris cursus mattis molestie a iaculis at erat pellentesque. Blandit turpis cursus in hac habitasse. Nulla facilisi morbi tempus iaculis urna id volutpat. Dolor sed viverra ipsum nunc aliquet. Aenean et tortor at risus viverra adipiscing at in. Lorem sed risus ultricies tristique nulla aliquet enim tortor at. Curabitur vitae nunc sed velit dignissim. Amet massa vitae tortor condimentum lacinia. Nec dui nunc mattis enim ut tellus.</p>
                    </div>
            </div>
        </div>
        <div class = "col-md-3">
            <div class = "thumbnail col-md-10 col-md-offset-1">
                <img src = "image/2.jpg" style = "width: 100%;">
                    <div class = "caption">
                        <h4 class = "pull-right">Php: 5,000,000</h4>
                        <h4><a href="product.php">Sports Car</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Donec massa sapien faucibus et molestie ac feugiat. Nibh nisl condimentum id venenatis a condimentum vitae sapien. Morbi tincidunt augue interdum velit. Mauris cursus mattis molestie a iaculis at erat pellentesque. Blandit turpis cursus in hac habitasse. Nulla facilisi morbi tempus iaculis urna id volutpat. Dolor sed viverra ipsum nunc aliquet. Aenean et tortor at risus viverra adipiscing at in. Lorem sed risus ultricies tristique nulla aliquet enim tortor at. Curabitur vitae nunc sed velit dignissim. Amet massa vitae tortor condimentum lacinia. Nec dui nunc mattis enim ut tellus.</p>
                    </div>
            </div>
        </div>
        <div class = "col-md-3">
            <div class = "thumbnail col-md-10 col-md-offset-1">
                <img src = "image/3.jpg" style = "width: 100%;">
                    <div class = "caption">
                        <h4 class = "pull-right">Php: 5,000,000</h4>
                        <h4><a href="product.php">Sports Car</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Donec massa sapien faucibus et molestie ac feugiat. Nibh nisl condimentum id venenatis a condimentum vitae sapien. Morbi tincidunt augue interdum velit. Mauris cursus mattis molestie a iaculis at erat pellentesque. Blandit turpis cursus in hac habitasse. Nulla facilisi morbi tempus iaculis urna id volutpat. Dolor sed viverra ipsum nunc aliquet. Aenean et tortor at risus viverra adipiscing at in. Lorem sed risus ultricies tristique nulla aliquet enim tortor at. Curabitur vitae nunc sed velit dignissim. Amet massa vitae tortor condimentum lacinia. Nec dui nunc mattis enim ut tellus.</p>
                    </div>
            </div>
        </div>
        <div class = "col-md-3">
            <div class = "thumbnail col-md-10 col-md-offset-1">
                <img src = "image/4.jpg" style = "width: 100%;">
                    <div class = "caption">
                        <h4 class = "pull-right">Php: 5,000,000</h4>
                        <h4><a href="product.php">Sports Car</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Donec massa sapien faucibus et molestie ac feugiat. Nibh nisl condimentum id venenatis a condimentum vitae sapien. Morbi tincidunt augue interdum velit. Mauris cursus mattis molestie a iaculis at erat pellentesque. Blandit turpis cursus in hac habitasse. Nulla facilisi morbi tempus iaculis urna id volutpat. Dolor sed viverra ipsum nunc aliquet. Aenean et tortor at risus viverra adipiscing at in. Lorem sed risus ultricies tristique nulla aliquet enim tortor at. Curabitur vitae nunc sed velit dignissim. Amet massa vitae tortor condimentum lacinia. Nec dui nunc mattis enim ut tellus.</p>
                    </div>
            </div>
        </div>

        </div>
  
    </body>
</html>