<?php
   $data = array(
        //ingles
        0 => array(25,15,10,),
        //frances
        1 => array(10,5,2),
        //mandarin
        2 => array(8,4,1),
         //ruso
        3 => array(12,8,4), 
        //portugues
        4 => array(30,15,10), 
        //japones
        5 => array(90,25,67), 
    );    
?>
<table class="table table-striped mt-5">
    <thead>
        <tr>
        <th scope="col">Idioma</th>
        <th scope="col">Basico</th>
        <th scope="col">Intermedio</th>
        <th scope="col">Avanzado</th>
        </tr>
    </thead>
    <?php
    foreach($data as $key => $value)
        {
    ?>
    <tr> 
        <td>
            <?php
                if($key === 0 ){
                    echo "Ingles";
                }elseif($key === 1){
                    echo "Frances";
                }
                elseif($key === 2){
                    echo "Mandarin";
                }
                elseif($key === 3){
                    echo "Ruso";
                }
                elseif($key === 4){
                    echo "Portugues"; 
                }
                elseif($key === 5){
                    echo "Japones";
                }
            ?>
        </td>
        <?php foreach($value as $key=>$value)
            {
        ?>
        <td>
            <?php echo $value;?>
        </td>
        <?php
            }
        ?>
    </tr>
    <?php
        }
    ?>
</table>