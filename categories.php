<?php
    include("header.php");
    include("conn.php");

    $sql="select * from category_tbl;";
    $result=$conn->query($sql);

?>


<section>   
      <!-- catagory section -->

  <section class="catagory_section layout_padding">
    <div class="catagory_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Books Categories
          </h2>
        </div>
        <div class="row">
         <?php
              if($result->num_rows > 0)
              {
                while($row=$result->fetch_assoc())
                {
                  ?>
                     <div class="col-sm-6 col-md-4 ">
                        <div class="box ">
                          <div class="img-box">
                            <a href="book.php?cat_id=<?php echo $row["cat_id"]; ?>"><img src="<?php echo $row["image_path"]; ?>" alt=""></a>
                          </div>
                          <div class="detail-box">
                            <h5>
                              <?php echo $row["cat_name"]; ?>
                            </h5>
                            <p>
                               <?php echo $row["short_description"]; ?>
                            </p>
                          </div>
                        </div>
                    </div>
                  <?php
                }
              }
         ?>
        </div>
      </div>
    </div>
  </section>

  <!-- end catagory section -->
</section>



<?php
    include("footer.php");
?>