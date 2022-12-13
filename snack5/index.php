<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php 
$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A nisi aliquid corrupti quas veniam quod temporibus. Sunt ea autem quos repellendus explicabo dolorum deleniti quas, temporibus excepturi. Adipisci, non praesentium!';

$pezzi = explode(".", $paragrafo);

// var_dump ($pezzi);
?>

<?php for($i = 0; $i < count($pezzi); $i++){?>
    <p><?php echo $pezzi[$i]; ?></p> 
    <?php };
    
// // echo $pezzi[0];