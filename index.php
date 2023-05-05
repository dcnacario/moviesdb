<?php 
    require('api.php');
?>
<html>
    <head>
    </head>
    <body>
        <table>
            <tr>
                <th>Rank</th>
                <th colspan="2">Title</th>
                <th>Year</th>
                <th>Description</th>

            </tr>
        <?php 
            $data = json_decode($response, true);
            foreach($data as $movie){
        ?>
            <tr>
                <td><?php echo $movie['rank']?></td>
                <td><img src="<?php echo $movie['image']?>" height="200"></td>
                <td><?php echo $movie['title']?></td>
                <td><?php echo $movie['year']?></td>
                <td><?php echo $movie['description']?></td>
            </tr>
        <?php 
            }
        ?>
        </table>
    </body>
</html>
