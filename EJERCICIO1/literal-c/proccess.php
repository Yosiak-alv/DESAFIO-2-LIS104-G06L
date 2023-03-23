<?php
   $data = array(
        '0' => array(
            //ingles
            'basico' => 25,
            'intermedio' => 15,
            'avanzado' => 10,
        ),
        '1' => array(
            //frances
            'basico' => 10,
            'intermedio' => 5,
            'avanzado' => 2,
        ),
        '2' => array(
            //mandarin
            'basico' => 8,
            'intermedio' => 4,
            'avanzado' => 1,
        ),
        '3' => array(
            //ruso
            'basico' => 12,
            'intermedio' => 8,
            'avanzado' => 4,

        ),
        '4' => array(
            //portugues
            'basico' => 30,
            'intermedio' => 15,
            'avanzado' => 10,
        ),
        '5' => array(
            //japones
            'basico' => 90,
            'intermedio' => 25,
            'avanzado' => 67,
        ),
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