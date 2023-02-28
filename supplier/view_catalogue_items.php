<?php 
    $con = mysqli_connect ("localhost","root","","mightyflex");
    //if(!isset($_SESSION['admin_email'])){
        
      //  echo "<script>window.open('login.php','_self')</script>";
        
    //}else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / View Details in catalogue
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags fa-fw"></i> View Details
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Product ID </th>
                                <th> Image</th>
                                <th> Title </th>
                                <th> Item Description </th>
                                <th> Part NO. / Product Code</th>
                                <th> Price </th>
                                <th> Unit of Measure </th>
                                <th> Currency </th>
                                <th> Edit Product </th>
                                <th> Delete Product </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            
                                $i=0;
          
                                $get_items = "select * from catalogue_items";
          
                                $run_items = mysqli_query($con,$get_items);
          
                                while($row_items=mysqli_fetch_array($run_items)){
                                    
                                    $id = $row_items['id'];
                                    
                                    $title = $row_items['title'];
                                    $item_description = $row_items['item_description'];
                                    $product_code = $row_items['product_code'];
                                    $price = $row_items['price'];
                                    $currency = $row_items['currency'];
                                    $unit_of_measure = $row_items['unit_of_measure'];
                                    $lead_time = $row_items['lead_time'];
                                    $image = $row_items['image'];
                                                                       
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $image; ?> </td>
                                <td> <?php echo $title; ?> </td>
                                <td width="50"> <?php echo $item_description; ?> </td>
                                <td><?php echo $product_code; ?></td>
                                <td><?php echo $price; ?></td>
                                <td><?php echo $unit_of_measure; ?></td>
                                <td><?php echo $currency; ?></td>
                                
                                <td> 
                                    <a href="index.php?edit_p_cat= <?php echo $id; ?> ">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td> 
                                    <a href="index.php?delete_p_cat= <?php echo $id; ?> ">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                        
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- tabel tabel-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


<?php // } ?>
