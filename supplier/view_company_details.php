<?php 
     $con = mysqli_connect ("localhost","root","","mightyflex");
    //if(!isset($_SESSION['admin_email'])){
        
      //  echo "<script>window.open('login.php','_self')</script>";
        
   // }else{
   

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Products
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Products
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> ID: </th>
                                <th> Company Name: </th>
                                <th> Ownership Type: </th>
                                <th> Certificate of Registration: </th>
                                <th> PIN: </th>
                                
                                <th> Region: </th>
                                <th> Street Address: </th>
                                <th> Email: </th>
                                <th> Mobile: </th>
                                <th> Edit: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_pro = "select * from company ";
                                
                                $run_pro = mysqli_query($con,$get_pro);
          
                                while($row_pro=mysqli_fetch_array($run_pro)){
                                    
                                    $pro_id = $row_pro['id'];
                                    
                                    $pro_title = $row_pro['company_name'];
                                    
                                    // $pro_img1 = $row_pro['product_img1'];
                                    
                                    $pro_price = $row_pro['ownership_type'];
                                    $pro_cert = $row_pro['certificate_of_registration'];
                                    $pro_pin = $row_pro['pin'];
                                    $pro_region = $row_pro['region'];
                                    $pro_street = $row_pro['street'];
                                    $pro_email = $row_pro['email'];
                                    $pro_mobile = $row_pro['mobile'];
                                    
                                  
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $pro_title; ?> </td>  
                                <td> <?php echo $pro_price; ?> </td>                           
                                <td>  <?php echo $pro_cert; ?> </td>
                                <td> <?php echo $pro_pin; ?></td>
                                <td> <?php echo $pro_region; ?></td>
                                <td> <?php echo $pro_street; ?></td>
                                <td> <?php echo $pro_email; ?></td>
                                <td> <?php echo $pro_mobile; ?></td>
                                                            
                                <!-- <td> 
                                     
                                     <a href="index.php?delete_product=<?php  echo $pro_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td> -->
                                <td> 
                                     
                                     <a href="index.php?edit_product=<?php echo $pro_id; ?>">
                                     
                                        <i class="fa fa-pencil"></i> Edit
                                    
                                     </a> 
                                    
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


<?php //} ?>