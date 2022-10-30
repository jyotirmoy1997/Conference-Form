<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="" alt="" srcset="">
       <h1>Conference Name</h1> 
    </header>
    <div class="sponsors">
        Technical Sponsors:
        <div>
            Sponsor 1
        </div>
        <div>
            Sponsor 2
        </div>
    </div>
    <form class="container"  action="index.php" method="post" enctype="multipart/form-data">

            <div id="head" class="gi head">Personal Details</div>

            <div id="hon" class="gi hon">
                Honour
                <select name="honor" id="">
                    <option value="Dr">Dr.</option>
                    <option value="Mr">Mr.</option>
                    <option value="Ms">Ms.</option>
                    <option value="Mrs">Mrs.</option>
                </select>
            </div>

            <div id="el1" class="gi cl1">
                <label for="">First Name</label>
                <input class="gen-in" type="text" name="fn">
            </div>

            <div id="el2" class="gi cl2">
                <label for="">Last Name</label>
                <input class="gen-in" type="text" name="ln">
            </div>

            <div id="el3" class="gi cl1">
                <label for="">Designation</label>
                <input class="gen-in" type="text" name="des">
            </div>

            <div id="el4" class="gi cl2">
                <label for="">Affiliation</label>
                <input class="gen-in" type="text" name="aff">
            </div>

            <div id="el5" class="gi cl1 radio" >
                <label for="">Gender:</label>
                <div class="radio-el-wrap">
                    <div class="radio-el">
                        <label for="">Male</label>
                        <input type="radio" name="gender" value="Male">
                    </div>
                    <div class="radio-el">
                        <label for="">Female</label>
                        <input type="radio" name="gender" value="Female">
                    </div>
                </div>
            </div>

            <div id="el6" class="gi cl2 radio" >
                <label for="">Candidature:</label>
                <div class="radio-el-wrap">
                    <div class="radio-el">
                        <label for="">Presenter</label>
                        <input type="radio" name="pres" value="Presenter">
                    </div>
                    <div class="radio-el">
                        <label for="">Participant</label>
                        <input type="radio" name="pres" value="Participant">
                    </div>
                </div>
            </div>

            <div class="gi head2">Contact Details</div>

            <div id="el7" class="gi cl1">
                <label for="">Email</label>
                <input class="gen-in" type="email" name="email">
            </div>

            <div id="el8" class="gi cl2">
                <label for="">Contact No.</label>
                <input class="gen-in" type="number" name="phone">
            </div>

            <div  class="gi head3">Other Details</div>

            <div id="el9" class="gi cl1 rf">
                Food Preference
                <select name="foodpref" id="">
                    <option value="Veg">Veg</option>
                    <option value="NonVeg">Non-Veg</option>
                </select>
            </div>

            <div id="el10" class="gi cl2 rf">
                Accomodation
                <select name="accomodation" id="">
                    <option value="req">Required</option>
                    <option value="nreq">Not-Required</option>
                </select>
            </div>
            <div id="el11" class="gi cl1 rf">
                <label for="">Registration Fees (&#x20B9)</label>
                <input class="gen-in" type="number" name="regfe">
            </div>

            <div id="el12" class="gi file-upload">
                <!-- <form  method="post" enctype="multipart/form-data"> -->
                    <div class="form">
                        <label id="ps" for="">Payment Slip</label>
                        <input type="file" name="file" id="payfile" accept=".pdf" required>
                        <label id="pf" for="payfile">
                            <span>
                                <img src="./assets/upload.png" alt="" height="50px" width="50px">
                            </span>
                            <span>Choose a File</span>
                        </label>
                    </div>
                    
                <!-- </form> -->
            </div>
            <button name="btn" class="cl1">Submit</button>
        
    </form>
    <?php 
        if(isset($_POST["btn"]))
        {
            $fn = $_POST["fn"];
            $ln = $_POST["ln"];
            $des = $_POST["des"];
            $aff = $_POST["aff"];
            $email= $_POST["email"];
            $phone = $_POST["phone"];
            $gender = $_POST['gender'];
            $pres = $_POST['pres'];
            $foodpref = $_POST["foodpref"];
            $accomodation = $_POST["accomodation"];

            // CSV Data part
            $file = fopen('data.csv', 'a');
            $rows = count(file('data.csv'));
            $form_data = array(
                'fname' => $fn,
                'lname' => $ln,
                'designation' => $des,
                'affiliation' => $aff,
                'email' => $email,
                'phone' => $phone,
                'gender' => $gender,
                'pres' => $pres,
                'foodpref' => $foodpref,
                'accomodation' => $accomodation
            );
            fputcsv($file, $form_data);

        // File Upload Part
        $file_name = $_FILES['file']['name'];
        $file_type = $_FILES['file']['type'];
        $file_size = $_FILES['file']['size'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_store = "uploads/".$file_name;
        move_uploaded_file($file_loc, $file_store);
        }
    

    ?>
</body>
</html>