<?php include(APPROOT . "/views/includes/header.php"); ?> 


<section>
        <div class="container1">
            <div class="content3">
                <div class="box1">
                    <h1>Products</h1>
                    
                    <div class="slideshow-container1">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides1 fade1">
                            <div class="numbertext1">1 / 3</div>
                            <img src="/images/img1.jpg" style="width:100%">
                            <div class="text1">ThinkCentre M920 SFF <br>$1599</div>
                        </div>

                        <div class="mySlides1 fade1">
                            <div class="numbertext1">2 / 3</div>
                            <img src="/images/img2.jpg" style="width:100%">
                            <div class="text1">CORE i7 9th Gen <br>$1399</div>
                        </div>

                        <div class="mySlides1 fade1">
                            <div class="numbertext1">3 / 3</div>
                            <img src="/images/img3.jpg" style="width:100%">
                            <div class="text1">ASUS ROG Huracan Gaming PC
                                <br>$1999</div>
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev1" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next1" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    <!-- The dots/circles -->
                    <div style="text-align:center">
                        <span class="dot1" onclick="currentSlide(1)"></span>
                        <span class="dot1" onclick="currentSlide(2)"></span>
                        <span class="dot1" onclick="currentSlide(3)"></span>
                    </div>
                </div>
                <div class="box2">
                    <h1>Services</h1>
                    <div class="container">
                        <div class="card-deck mb-3 text-center">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Upgrade</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">$199<small class="text-muted"></small>
                                    </h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>240 Gigabyte Solid State Drive</li>
                                        <li>16 Gigabytes of Ram</li>
                                        <li>Fresh Windows 10 Install</li>

                                    </ul>
                                    <button type="button" class="btn btn-lg btn-block btn-primary">Buy Now</button>
                                </div>
                            </div>
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Clean-Up</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">$69 <small class="text-muted"></small>
                                    </h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>Fresh Windows Install</li>
                                        <li>Disk Cleanup </li>
                                        <li>Windows Optomisation</li>

                                    </ul>
                                    <button type="button" class="btn btn-lg btn-block btn-primary">Buy Now</button>
                                </div>
                            </div>
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Manitainance</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small>
                                    </h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>Regular Cleanup</li>
                                        <li>Disk Defragmentation</li>
                                        <li>Clean Regristry</li>

                                    </ul>
                                    <button type="button" class="btn btn-lg btn-block btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>

                      
                    </div>
                </div>
                <div class="box3">
                    <h1>Advice And FAQ</h1>
                    <div class="para1">
                            <img src="/images/help.jpg"  alt="help">
                        <p>Adipiscing bibendum est ultricies integer. Iaculis urna id volutpat lacus laoreet non
                            curabitur. Nunc congue nisi vitae suscipit tellus. Pellentesque habitant morbi tristique
                            senectus et netus et malesuada fames. Nulla facilisi cras fermentum odio. Placerat
                            vestibulum lectus mauris ultrices. Pretium viverra suspendisse potenti nullam ac. Ac odio
                            tempor orci dapibus ultrices in iaculis. Vitae turpis massa sed elementum tempus egestas.
                            Semper risus in hendrerit gravida rutrum quisque non tellus. Mattis nunc sed blandit libero
                            volutpat. Cras pulvinar mattis nunc sed. Fermentum leo vel orci porta non pulvinar neque.
                            Eleifend donec pretium vulputate sapien. Dolor sit amet consectetur adipiscing.</p>
                            
                          

                    </div>
                    <div id="center">

                    <h2>Leave a comment:</h2>
                    <form name="form2" class="form2" action="submit" method="POST" >
                    <textarea name="comment" id="textarea1" cols="50vw" rows="5"></textarea>
                    <textarea name="comment" id="textarea2" cols="20vw" rows="5"></textarea><br> <br>
                    <input type="button" class="button2" value="submit" onClick="">
                    </form>
                    </div>
                </div>
             

            </div>
        </div>
        <script src='../public/scripts/script.js'>
  
        </script>
    </section>
  




<!-- importing the footer -->
<?php include(APPROOT . "/views/includes/footer.php"); ?>