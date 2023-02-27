<?php 
    $con = mysqli_connect ("localhost","root","","mightyflex");
    // if(!isset($_SESSION['admin_email'])){
        
    //     echo "<script>window.open('login.php','_self')</script>";
        
    // }else{

?>

<?php 

    if(isset($_GET['edit_product'])){
        
        $edit_id = $_GET['edit_product'];
        
        $get_company = "select * from company where id='$edit_id'";
        
        $run_edit = mysqli_query($con,$get_company);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
       
                                     
        $pro_title = $row_edit['company_name'];
        $pro_yoe = $row_edit['YOE'];
        $pro_price = $row_edit['ownership_type'];
        $pro_cert = $row_edit['certificate_of_registration'];
        $pro_pin = $row_edit['pin'];
        $pro_region = $row_edit['region'];
        $pro_street = $row_edit['street'];
        $pro_email = $row_edit['email'];
        $pro_mobile = $row_edit['mobile'];
        
    }
        
       

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Products </title>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Company
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Edit Company 
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Company Name </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="company_name" type="text" class="form-control" required value="<?php echo $pro_title; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> YOE </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="year_of_establishment" type="text" class="form-control" required value="<?php echo $pro_yoe; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                       <label class="col-md-3 control-label"> Ownership type </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="ownership_type" type="text" class="form-control" required value="<?php echo $pro_price; ?>">
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    <div class="form-group"><!-- form-group Begin -->
                       
                       <label class="col-md-3 control-label">Certificate of Registration </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="certificate_of_registration" type="text" class="form-control" required value="<?php echo $pro_cert; ?>">
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    <div class="form-group"><!-- form-group Begin -->
                       
                       <label class="col-md-3 control-label"> PIN </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="pin" type="text" class="form-control" required value="<?php echo $pro_pin; ?>">
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    <div class="form-group"><!-- form-group Begin -->
                       
                       <label class="col-md-3 control-label"> Region </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="region" type="text" class="form-control" required value="<?php echo $pro_region; ?>">
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    <div class="form-group"><!-- form-group Begin -->
                       
                       <label class="col-md-3 control-label"> Street Address</label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="street_address" type="text" class="form-control" required value="<?php echo $pro_street; ?>">
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    <div class="form-group"><!-- form-group Begin -->
                       
                       <label class="col-md-3 control-label"> Email </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="email" type="text" class="form-control" required value="<?php echo $pro_email; ?>">
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    <div class="form-group"><!-- form-group Begin -->
                       
                       <label class="col-md-3 control-label"> Mobile </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="mobile" type="text" class="form-control" required value="<?php echo $pro_mobile; ?>">
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
    
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="update" value="Update Details" type="submit" class="btn btn-primary form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
   
   
</body>
</html>


<?php 

if(isset($_POST['update'])){

    $pro_title = $_POST['company_name'];
    $pro_yoe = $_POST['YOE'];
    $pro_price = $_POST['ownership_type'];
    $pro_cert = $_POST['certificate_of_registration'];
    $pro_pin = $_POST['pin'];
    $pro_region = $_POST['region'];
    $pro_street = $_POST['street'];
    $pro_email = $_POST['email'];
    $pro_mobile = $_POST['mobile'];
    
    $update_company = "update company set company_name='$pro_title',YOE='$pro_yoe',ownership_type='$pro_price',certificate_of_registration='$pro_cert',pin='$pro_pin',region='$pro_region',street='$pro_street',email='$pro_email',mobile='$pro_mobile' where id='$p_id'";
    
    $run_company = mysqli_query($con,$update_company);
    
    if($run_company){
        
       echo "<script>alert('Your company has been updated Successfully')</script>"; 
        
       echo "<script>window.open('index.php?view_company_details','_self')</script>"; 
        
    }
    
}

?>


<?php //} ?>