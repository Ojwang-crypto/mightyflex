 <!-- start Header -->
   <?php
     include("includes/header.php")
   ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Get a Quote</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Get a Quote</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Get a Quote Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">

        <div class="row g-0">

          <div class="col-lg-5 quote-bg" style="background-image: url(assets/img/quote-bg.jpg);"></div>

          <div class="col-lg-7">
            <!--Item Details-->
            <form action="forms/quote.php" method="post" class="php-email-form">
              <h3>Fill in Quotation</h3>
              <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero park flows.</p>
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="Item_namr" class="form-control" placeholder="Item Name" required>
                </div>

                <div class="col-md-6">
                  <input type="number" name="quantity" class="form-control" placeholder="Quantity" required>
                </div>

                <div class="col-md-6">
                  <input type="number" name="weight" class="form-control" placeholder="Total Weight (kg)" required>
                </div>

                <div class="col-md-6">
                  <input type="number" name="max_budget" class="form-control" placeholder="Maximum Budget (Ksh)" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="description" rows="6" placeholder="Detailed Description" required></textarea>
                </div>

               <!--Personal Details-->
                <div class="col-lg-12">
                  <h4>Your Personal Details</h4>
                </div>

                <div class="col-md-6">
                  <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                </div>

                <div class="col-md-6">
                  <input type="text" name="mname" class="form-control" placeholder="Middle Name" >
                </div>

                <div class="col-md-6">
                  <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                </div>

                <div class="col-md-6">
                  <select class="form-group" name="id" id="identification" >
                        <option>Id Type</option>
                        <option value="National ID" required>National ID</option>
                        <option value="Passport" required>Passport ID</option>
                        </select>
                        
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="id_number" placeholder="ID Number" required>
                </div>
                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button type="submit">Submit Quotation</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
     include("includes/footer.php")
   ?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>