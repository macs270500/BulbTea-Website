<!-- ======= PHP // Connection to Database ======= -->
  <?php
    include 'connection.php';
    //create a query to select all records from items table
    $query="SELECT * FROM items";
    //run query and store the result in a variable called $result
    $result=mysqli_query($connection, $query);
  ?>

<!-- ======= Menu Section ======= -->
          <section id="menu" class="menu section-bg">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Menu</h2>
                <p>Check Our Tasty Drinks</p>
              </div>

              <!--<div class="row" data-aos="fade-up" data-aos-delay="100">-->
              <!--  <div class="col-lg-12 d-flex justify-content-center">-->
              <!--    <ul id="menu-flters">-->
              <!--      <li data-filter="*" class="filter-active">All</li>-->
              <!--      <li data-filter=".filter-starters">Starters</li>-->
              <!--      <li data-filter=".filter-salads">Salads</li>-->
              <!--      <li data-filter=".filter-specialty">Specialty</li>-->
              <!--    </ul>-->
              <!--  </div>-->
              <!--</div>-->

              <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

                <!-- PHP // Retrieve items from database and display in a specific format -->
                <?php
                  while($row=mysqli_fetch_assoc($result)){
                    //if(isset($_SESSION['username'])){
                    echo
                  '<div class="col-lg-6 menu-item filter-starters" action="forms/add-to-cart.php" method="post">
                    <img src="products/'.$row['image'].'" class="menu-img" alt="">
                        <div class="menu-content">
                          <a  id='.$row['name'].' name="name">'.$row['name'].'</a><span>Rs '.$row['price'].'</span>
                        </div>
                        <div class="menu-ingredients">'
                          .$row['description'].
                        //'</br>
                        //</br>
                        //<label>Quantity:</label>
                        //<input type="number" id='.$row['name'].' name="quantity" value="1" min="1">
                        //</br>
                        //</br>
                        //<a class="book-a-table-btn" id='.$row['name']. ' name="add-to-cart">Add to cart</a>
                        '</div>                        
                  </div>';
                  //}else{
                  //echo
                  //'<div class="col-lg-6 menu-item filter-starters">
                  //  <img src="products/'.$row['image'].'" class="menu-img" alt="">
                  //      <div class="menu-content">
                  //        <a href="#">'.$row['name'].'</a><span>Rs '.$row['price'].'</span>
                  //      </div>
                  //      <div class="menu-ingredients">'
                  //        .$row['description'].
                  //      '</div>
                  //</div>';
                  //}
                  }
                  ?>
                  <!-- end of php code -->

              </div>
              

            </div>
          </section>
          <!-- End Menu Section -->