<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dog Licensing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        div.container-fluid {
        position: relative;
        width: 100%;
        margin: 5px;
        border: 1px solid #000000;
        }
        .required::before {
        content: ' *';
        color: red;
      }
        </style>
  </head>
  <body>
    <?php
        require 'partials/submit_to_db.php';
        if ($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Congrats! Your form has been submitted  successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        if ($showError){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong>' . $showError .'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    ?>
    <form method="post" action="index.php">
        <h1 class="text-center" style="color:rgb(0,150,150);">DOG LICENSING</h1>
        <div class="container-fluid">
            <br>
            <h5 style="background-color:rgba(32,32,32,0.7); color:rgb(255,255,255);">SECTION 1 - SITE INFORMATION <label style="font-size:0.8em;position:relative;left:35%;transform: translateX(-50%);"> Please click "No Street Address / Owner" button to type in your address if it does not appear in the dropdowns below.</label>
                <button type="button" class="btn" style="background-color:rgb(0,150,150);color:rgb(255,255,255);float:right;position:relative;top:3px;height:18px;padding-top:0.1px; font-size:0.6em">NO STREET ADDRESS / OWNER</button>
            </h5>
            <div class="mb-3">
                <label for="siteStreetName" class="required" style="width:10%">Street Name</label>
                <select name="siteStreetName" id="siteStreetName" style="width:35%">
                    <option value=" ">Select any one option</option>
                    <option value="svroad">Sardar Vallab Patel Road</option>
                    <option value="linkroad">Link Road</option>
                </select>
                <label for="mapBlockLot" style="width:10%; text-align:right">Map Block Lot</label>
                <select name="mapBlockLot" id="mapBlockLot" style="width:40%;float:right">
                    <option value=" ">Select any one option</option>
                    <option value="svroad">Sardar Vallab Patel Road</option>
                    <option value="linkroad">Link Road</option>
                </select>
                <br><br>
                <label for="siteStreetNumber" class="required" style="width:10%">Street Number</label>
                <select required="required" name="siteStreetNumber" id="siteStreetNumber" style="width:35%">
                    <option value=" ">Select any one option</option>
                    <option value="1234">1234</option>
                    <option value="987">987</option>
                </select>

                <label for="zone" style="width:10%; text-align:right">Zone</label>
                <select name="zone" id="zone" style="width:40%;float:right">
                    <option value=" ">Select any one option</option>
                    <option value="south">Sout Zone</option>
                    <option value="north">North Zone</option>
                </select>

                <br><br>
                <label for="siteUnitNumber" style="width:10%">Unit Number </label>
                <select name="siteUnitNumber" id="siteUnitNumber" style="width:35%">
                    <option value=" ">Select any one option</option>
                    <option value="101">101</option>
                    <option value="201">201</option>
                </select>

            </div>
        </div>

        <div class="container-fluid">
            <br>
            <h5 style="background-color:rgba(32,32,32,0.7); color:rgb(255,255,255);">SECTION 2 - PROPERTY OWNER INFORMATION </h5>
            
            <div class="mb-3">
                <label for="ownerName" class="required" style="width:10%">Property Owner Name </label>
                <input type="text" required="required" name="ownerName" id="ownerName" style=" width:89.8%; float:right">
            </div>

            <div class="mb-3">
                <label for="ownerStreetNumber" class="required" style="width:10%">Street Number</label>
                <input type="text" required="required" name="ownerStreetNumber" id="ownerStreetNumber" style=" width:25%;">

                <label for="ownerStreetName" class="required" style="width:10%; text-align:center">Street Name</label>
                <input type="text" required="required" name="ownerStreetName" id="ownerStreetName" style=" width:54%; float:right">

                <br><br>

                <label for="ownerCity" class="required" style="width:10%; text-align:left">City</label>
                <input type="text" required="required" name="ownerCity" id="ownerCity" style=" width:25%;">

                <label for="ownerState" style="width:10%; text-align:center">State</label>
                <input type="text" name="ownerState" id="ownerState" style=" width:25%;">

                <label for="ownerZipcode" class="required" style="width:17%; text-align:right">Zip Code</label>
                <input type="text" required="required" name="ownerZipcode" id="ownerZipcode" style=" width:10%; float:right">

                <br><br>
                <label for="ownerUnitNumber" style="width:10%">Unit Number </label>
                <input type="text" name="ownerUnitNumber" id="ownerUnitNumber" style=" width:25%;">
            </div>
        </div>

        <div class="container-fluid">
            <br>
            <h5 style="background-color:rgba(32,32,32,0.7); color:rgb(255,255,255);">SECTION 3 - DOG OWNER INFORMATION </h5>
            
            <div class="mb-3">
                <label for="dogOwnerName" class="required" style="width:10%">Dog Owner Name </label>
                <input type="text" required="required" name="dogOwnerName" id="dogOwnerName" style="width:89.8%; float:right">
            </div>

            <div class="mb-3">
                <label for="dogOwnerStreetNumber" style="width:10%">Street Number</label>
                <input type="text" name="dogOwnerStreetNumber" id="dogOwnerStreetNumber" style="width:25%;">

                <label for="dogOwnerStreetName" style="width:10%; text-align:center">Street Name</label>
                <input type="text" name="dogOwnerStreetName" id="dogOwnerStreetName" style="width:54%; float:right">

                <br><br>

                <label for="dogOwnerCity" style="width:10%; text-align:left">City</label>
                <input type="text" name="dogOwnerCity" id="dogOwnerCity" style="width:25%;">

                <label for="dogOwnerState" style="width:10.3%; text-align:center">State</label>
                <input type="text" name="dogOwnerState" id="dogOwnerState" style="width:25%;">

                <label for="dogOwnerZipcode" style="width:17%; text-align:right">Zip Code</label>
                <input type="text" name="dogOwnerZipcode" id="dogOwnerZipcode" style="width:10%; float:right">

                <br><br>
                <label for="dogOwnerTelephone" class="required" style="width:10%">Telephone</label>
                <input type="text" required="required" name="dogOwnerTelephone" id="dogOwnerTelephone" style="width:25%;">

                <label for="dogOwnerEmail" style="width:10%; text-align:center">Email</label>
                <input type="text" name="dogOwnerEmail" id="dogOwnerEmail" style="width:54%; float:right">

                <br><br>
                <label for="dogPhone" style="width:10%">Work Phone / Cell Phone</label>
                <input type="text" name="dogPhone" id="dogPhone" style="width:25%;">

                <label for="dogOwnerUnitNumber" style="width:10%; text-align:center">Unit Number</label>
                <input type="text" name="dogOwnerUnitNumber" id="dogOwnerUnitNumber" style="width:54%; float:right">
                <br><br>
                <input type="checkbox" name="agree" id="agree" value="agreed" style="margin:4px;width:20px;height:20px;border:5px">
                <label for="agree"><strong><i>I hereby attest that I am 70 years of age or over and that I am the owner of the dog(s) I am licensing.</i></strong></label>

            </div>
        </div>
        <div class="container">
            <button type="submit" class="btn btn-primary" style="width:20%;position:relative;left:50%;transform: translateX(-50%);">Submit</button>
        </div>
            
        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>