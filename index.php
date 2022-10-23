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
    <form action="index.php" method="post">
        <div class="container">

            <div class="head">Personal Details</div>

            <div class="hon">
                Honour
                <select name="" id="">
                    <option value="Dr">Dr.</option>
                    <option value="Mr">Mr.</option>
                    <option value="Ms">Ms.</option>
                    <option value="Mrs">Mrs.</option>
                </select>
            </div>

            <div class="cl1">
                <label for="">First Name</label>
                <input class="gen-in" type="text" name="fn">
            </div>

            <div class="cl2">
                <label for="">Last Name</label>
                <input class="gen-in" type="text" name="ln">
            </div>

            <div class="cl1">
                <label for="">Designation</label>
                <input class="gen-in" type="text" name="des">
            </div>

            <div class="cl2">
                <label for="">Affiliation</label>
                <input class="gen-in" type="text" name="aff">
            </div>

            <div class="cl1 rd radio" >
                <label for="">Gender:</label>
                <div class="radio-el-wrap">
                    <div class="radio-el">
                        <label for="">Male</label>
                        <input type="radio" name="gender" value="Male">
                    </div>
                    <div class="radio-el">
                        <label for="">Female</label>
                        <input type="radio" name="gender" value="Male">
                    </div>
                </div>
            </div>

            <div class="cl2 radio" >
                <label for="">Candidature:</label>
                <div class="radio-el-wrap">
                    <div class="radio-el">
                        <label for="">Presenter</label>
                        <input type="radio" name="pres" value="Male">
                    </div>
                    <div class="radio-el">
                        <label for="">Participant</label>
                        <input type="radio" name="pres" value="Male">
                    </div>
                </div>
            </div>

            <div class="head2">Contact Details</div>

            <div class="cl1">
                <label for="">Email</label>
                <input class="gen-in" type="email" name="des">
            </div>

            <div class="cl2">
                <label for="">Contact No.</label>
                <input class="gen-in" type="number" name="aff">
            </div>

            <div class="head3">Other Details</div>

            <div class="cl1 rf">
                Food Preference
                <select name="" id="">
                    <option value="Veg">Veg</option>
                    <option value="NonVeg">Non-Veg</option>
                </select>
            </div>

            <div class="cl2 rf">
                Accomodation
                <select name="" id="">
                    <option value="req">Required</option>
                    <option value="nreq">Not-Required</option>
                </select>
            </div>
            <div class="cl1 rf">
                <label for="">Registration Fees (&#x20B9)</label>
                <input class="gen-in" type="number" name="des">
            </div>

            <div class="file-upload">
                <form  method="post" enctype="multipart/form-data">
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
                    
                </form>
            </div>
            

        </div>
        <!-- <button>Submit</button> -->
    </form>
    <?php 
    
    // echo $_POST["fn"];

    ?>
</body>
</html>