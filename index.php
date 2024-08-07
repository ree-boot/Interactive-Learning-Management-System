    <!-- Header -->
    <?php
      include('./header.php');
    ?>
    <!-- Background Image -->
    <div class="container-fluid">
      <div class="bg-parent">
        <img class="bg-img" src="Resources/bgdimg.jpg">
        <div class="bg-overlay"></div>
      </div>
      <div class="overlay-content">
        <h1 class="my-content">Welcome to My LMS</h1>
        <br>
        <h3 class="my-content">Learn -> Implement -> Grow</h3>
        <br>
        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#regformModal">Get Started</a>
      </div>
    </div>

    <!--Home Page Text Banner -->
    <div class="container-fluid bg-danger txt-banner">
      <div class="row bottom-banner">
        <div class="col-sm">
          <h5><i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
        </div>
        <div class="col-sm">
          <h5><i class="fas fa-users mr-3"></i> Industry Certified Instructors</h5>
        </div>
        <div class="col-sm">
          <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
        </div>
        <div class="col-sm">
          <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee*</h5>
        </div>
      </div>
    </div>

    <!-- Popular Courses -->
    <div class="container mt-5">
      <h1 class="text-center">Popular Courses</h1>
      
      <!-- Deck 1 -->
      <div class="row mt-4">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="Resources/guitar.png" class="card-img-top" alt="Guitar">
            <div class="card-body">
              <h5 class="card-title">Learn Easily!</h5>
              <p class="card-text">Some Text.</p>
            </div>
            <div class="card-footer">
              <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
                <span class="font-weight-bolder">&#8377 400</span>
              </p>
              <a class="btn btn-primary text-white" style="font-weight: bolder; float: right;" href="coursedetails.php">Enroll</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="Resources/guitar.png" class="card-img-top" alt="Guitar">
            <div class="card-body">
              <h5 class="card-title">Learn Easily!</h5>
              <p class="card-text">Some Text.</p>
            </div>
            <div class="card-footer">
              <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
                <span class="font-weight-bolder">&#8377 400</span>
              </p>
              <a class="btn btn-primary text-white" style="font-weight: bolder; float: right;" href="#">Enroll</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="Resources/guitar.png" class="card-img-top" alt="Guitar">
            <div class="card-body">
              <h5 class="card-title">Learn Easily!</h5>
              <p class="card-text">Some Text.</p>
            </div>
            <div class="card-footer">
              <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
                <span class="font-weight-bolder">&#8377 400</span>
              </p>
              <a class="btn btn-primary text-white" style="font-weight: bolder; float: right;" href="#">Enroll</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Deck 2 -->
      <div class="row mt-4">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="Resources/python.png" class="card-img-top" alt="Python">
            <div class="card-body">
              <h5 class="card-title">Learn Easily!</h5>
              <p class="card-text">Some Text.</p>
            </div>
            <div class="card-footer">
              <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
                <span class="font-weight-bolder">&#8377 400</span>
              </p>
              <a class="btn btn-primary text-white" style="font-weight: bolder; float: right;" href="#">Enroll</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="Resources/python.png" class="card-img-top" alt="Python">
            <div class="card-body">
              <h5 class="card-title">Learn Easily!</h5>
              <p class="card-text">Some Text.</p>
            </div>
            <div class="card-footer">
              <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
                <span class="font-weight-bolder">&#8377 400</span>
              </p>
              <a class="btn btn-primary text-white" style="font-weight: bolder; float: right;" href="#">Enroll</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="Resources/python.png" class="card-img-top" alt="Python">
            <div class="card-body">
              <h5 class="card-title">Learn Easily!</h5>
              <p class="card-text">Some Text.</p>
            </div>
            <div class="card-footer">
              <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
                <span class="font-weight-bolder">&#8377 400</span>
              </p>
              <a class="btn btn-primary text-white" style="font-weight: bolder; float: right;" href="#">Enroll</a>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center m-2">
        <a class="btn btn-danger btn-sm" href="#">View All Courses</a>
      </div>
    </div>
    
    <!-- Contact Us -->
    <?php
      include('./contact.php');
    ?>
    <!-- Social Media Links -->
    <div class="container-fluid bg-danger">
      <div class="row text-white text-center p-1">
        <div class="col-sm">
          <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
        </div>
        <div class="col-sm">
          <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> X</a>
        </div>
        <div class="col-sm">
          <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i> Whatsapp</a>
        </div>
        <div class="col-sm">
          <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
        </div>
      </div>
    </div>

    <!-- About Section -->
    <div class="container-fluid p-4" style="background-color: white;">
      <div class="container" style="background-color: white;">
        <div class="row text-center">
          <div class="col-sm">
            <h5>About Us</h5>
            <p>About Us Text.</p>
          </div>
          <div class="col-sm">
            <h5>Category</h5>
            <a class="text-dark" href="#">Web Development</a>
            <br>
            <a class="text-dark" href="#">Web Designing</a>
            <br>
            <a class="text-dark" href="#">Android Development</a>
            <br>
            <a class="text-dark" href="#">iOS Development</a>
            <br>
            <a class="text-dark" href="#">Game Development</a>
            <br>
          </div>
          <div class="col-sm">
            <h5>Contact Us</h5>
            <p>Adress and contact info.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php
      include('./footer.php');
    ?>