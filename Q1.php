<!-- Shopping Cart: -->
<?php
function calculateTotalPrice($items){
    $totalPrice=0;
    foreach($items as $item){
        $totalprice +=$item['price'];
     }
     if ($totalPrice>5000){
        $discountedPrice=$totalPrice*0.9;
        return $discountedPrice;
     }
     else{
        return $totalPrice;
     }
}
//Example usage;
$items=array(
   array("item"=>"Shirt","price"=>1500),
   array("item"=>"Jeans","price"=>2500),
   array("item"=>"Shoes","price"=>1200)
);

$totalPrice=calculateTotalPrice($items);
echo "Total Price: Rs". $totalPrice;
?>
