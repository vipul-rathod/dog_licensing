<?php
declare(strict_types=1);

$showAlert = false;
$showError = false;
$err = [];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST['agree'])){


        include "partials/_dbconnect.php";
        $toCheckArray = [   $_POST['siteStreetName'], $_POST['siteStreetNumber'],
                            $_POST['ownerName'], $_POST['ownerStreetNumber'], $_POST['ownerStreetName'], $_POST['ownerCity'], $_POST['ownerZipcode'],
                            $_POST['dogOwnerName'], $_POST['dogOwnerTelephone']];

        foreach ($toCheckArray as $checkKey){
            if (empty($checkKey) || str_starts_with($checkKey,' ')){
                $err[] = $checkKey;
            }
        }

        if(count($err)>0){
            $showError = "* marked field cannot be left empty. Please fill the necessary details";
            echo $showError;
        }
        else{
            $insData = array(
                "siteStreetName"=> $_POST["siteStreetName"], "mapBlockLot"=> $_POST["mapBlockLot"], "siteStreetNumber"=> $_POST["siteStreetNumber"], "zone"=> $_POST["zone"], 
                "siteUnitNumber"=> $_POST["siteUnitNumber"], "ownerName"=> $_POST["ownerName"], "ownerStreetNumber"=> $_POST["ownerStreetNumber"],
                "ownerStreetName"=> $_POST["ownerStreetName"], "ownerCity"=> $_POST["ownerCity"], "ownerState"=> $_POST["ownerState"], "ownerZipcode"=> $_POST["ownerZipcode"],
                "ownerUnitNumber"=> $_POST["ownerUnitNumber"], "dogOwnerName"=> $_POST["dogOwnerName"], "dogOwnerStreetNumber"=> $_POST["dogOwnerStreetNumber"],
                "dogOwnerStreetName"=> $_POST["dogOwnerStreetName"], "dogOwnerCity"=> $_POST["dogOwnerCity"], "dogOwnerState"=> $_POST["dogOwnerState"],
                "dogOwnerZipcode"=> $_POST["dogOwnerZipcode"], "dogOwnerTelephone"=> $_POST["dogOwnerTelephone"], "dogOwnerEmail"=> $_POST["dogOwnerEmail"], 
                "dogPhone"=> $_POST["dogPhone"], "dogOwnerUnitNumber"=> $_POST["dogOwnerUnitNumber"]);
            
            $columns = implode(", ",array_keys($insData));

            $prep = array();
            
            $i=1;
            foreach($insData as $k => $v ) {
                $prep[$i.' :'.$k] = "'".$v."'";
                $i++;
            }
            $values = implode(", ", $prep);

            $sql = "INSERT INTO `{$database}`.`{$table}` ($columns) VALUES ($values)";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = True;
            }
            else{
                $showError = "Something went wrong!";
            }
        }
    }
    else{
        $showError = "Please check the agreed age;";
    }
}
?>