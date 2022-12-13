<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php function getRandomArray($min,$max){

    $newArray = [];

    while(count($newArray) < $max){
        $number = rand($min,$max);

        if (!in_array($number,$newArray)) {
            $newArray[] = $number;
        }
    }

    return $newArray;
}
?>
<?php var_dump(getRandomArray(0,10)); ?>

<h1><?php echo implode(" ",getRandomArray(0,10)); ?></h1>
