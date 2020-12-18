<?php

    include('config/db_connect.php');


    if(isset($_POST['submit'])){
        
        $date =  $_POST['date'];
        $cname = $_POST['cname'];
        $cphone = $_POST['cphone'];
        $fabrics = implode(',', $_POST['fabrics']);
        $services = implode(',',$_POST['services']);
        $gtprice = $_POST['gtprice'];
        
       
        $sql = "INSERT INTO form(date, cname, cphone, fabric, service, gtprice) 
                        VALUES('$date', '$cname', '$cphone', '$fabrics', '$services', '$gtprice')";

        if(mysqli_query($conn, $sql)){
            // success
            header('Location: add.php');
        } else {
            echo 'query error: '. mysqli_error($conn);
        }
    }

?>
<!DOCTYPE html>
<html>

    <?php include('header.php');?>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Laundry Pak Uda</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="#">Sign out</a>
                </li>
            </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span data-feather="file"></span>
                            Create orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="shopping-cart"></span>
                            Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            Reports
                        </a>
                    </li>
                    
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Create Orders</h1> 
            </div>

            <form action="add.php" method="POST">
                <div class="form-row">
                    <div class="col-md-6 mb-3"><!--Date-->
                        <label for="validationDefault05">Date</label>
                        <input type="date" class="form-control" id="validationDefault05" name="date" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3"><!--Name-->
                        <label for="validationDefault01">Customer Name</label>
                        <input type="text" class="form-control" id="validationDefault01" name="cname" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault02">Customer Phone Number</label><!--Phone Number-->
                        <input type="text" class="form-control" id="validationDefault02" name="cphone" required>
                    </div>
                </div>
                <label for="validationDefault02">Fabrics</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Daily Outfit" name="fabrics[]" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Daily Outfit</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Undergarments" name="fabrics[]" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">Undergarments</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Household Items" name="fabrics[]" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Household Items</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Prayer's Items" name="fabrics[]" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Prayer's Items</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Silk" name="fabrics[]" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Silk</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Suede and Soft Leathers" name="fabrics[]" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Suede and Soft Leathers</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Cotton Voile/Muslin" name="fabrics[]" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Cotton Voile/Muslin</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Cashmere" name="fabrics[]" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Cashmere</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Embroidery/Sequins/Beaded" name="fabrics[]" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Embroidery/Sequins/Beaded</label>
                </div>
                <br>
                <label for="validationDefault02">Service</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Normal Wash" name="services[]" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Normal Wash(Wash/Rinse/Spin/Dry)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Dry Cleaning" name="services[]" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">Dry Cleaning</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Ironing/Folding" name="services[]" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">Ironing/Folding</label>
                </div><br>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault05">Total Price</label>
                        <input type="number" class="form-control" id="validationDefault05" name="gtprice" required>
                    </div>
                </div>
                
                <br>
                <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
            </form>

          
                
            
        </main>
      </div>
    </div>
    
    <?php include('footer.php')?>

    <script>
	function closeMsg()
	{
		$('#cl').hide();
	}
</script>

</body>
</html>