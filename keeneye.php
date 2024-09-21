?php
$name=readline("your name: ");

$dateOfBirth=(readline("your date of birth(dd-mm-yyyy): "));

$address=readline("provide your address: ");

//handle errors 

try{
    $birthDtate=new DateTime($dateOfBirth);
    // age
    $years=date('Y')- $birthDtate->format('Y');
    

// message
print("Welcome $name ! Back Home at $address and you are $years years  per now.");

}catch(Exception $e){
    echo "Invalid dob format Format";
}
?>