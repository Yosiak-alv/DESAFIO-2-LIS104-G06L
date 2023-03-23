<?php
   $data = array(
        'ingles' => array(
            //ingles
            'basico' => 25,
            'intermedio' => 15,
            'avanzado' => 10,
        ),
        'frances' => array(
            //frances
            'basico' => 10,
            'intermedio' => 5,
            'avanzado' => 2,
        ),
        'mandarin' => array(
            //mandarin
            'basico' => 8,
            'intermedio' => 4,
            'avanzado' => 1,
        ),
        'ruso' => array(
            //ruso
            'basico' => 12,
            'intermedio' => 8,
            'avanzado' => 4,

        ),
        'portugues' => array(
            //portugues
            'basico' => 30,
            'intermedio' => 15,
            'avanzado' => 10,
        ),
        'japones' => array(
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
                echo ucwords($key);
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