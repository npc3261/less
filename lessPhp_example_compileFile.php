<?php
        include_once('./lessphp/lessc.inc.php');
        
        $less = new lessc();
        
        $css = $less->compileFile("lessPhp_compileFile.less");
        ?>


<!DOCTYPE html>
<html>
    <head>
       <title>Table LESS</title>  
       <!--<link rel="stylesheet/less"  type="text/css" href="./tablestyle.less"> 
       <script src="./less.js/dist/less.js"></script> -->
    </head>
    <style>
        <?php echo $css;?>
    </style>
    <body>
        <table id="tbl1">
            <tr>
                <th>id</th>
                <th>voornaam</th>
                <th>tussenvoegsel</th>
                <th>achternaam</th>
                <th>gebruikersrol</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Arjan</td>
                <td>de</td>
                <td>Ruijter</td>
                <td>root</td>                
            </tr>
            <tr>
                <td>2</td>
                <td>Frans</td>
                <td>van</td>
                <td>Ouderkerk</td>
                <td>admin</td>                
            </tr>
            <tr>
                <td>3</td>
                <td>Hans</td>
                <td>van</td>
                <td>Tuien</td>
                <td>developer</td>                
            </tr>
            <tr>
                <td>4</td>
                <td>Fred</td>
                <td>de</td>
                <td>Bakker</td>
                <td>customer</td>                
            </tr>
            <tr>
                <td>5</td>
                <td>Freek</td>
                <td>de</td>
                <td>Boer</td>
                <td>admin</td>                
            </tr>            
        </table>
        
        <table id="tbl2">
            <tr>
                <th>id</th>
                <th>voornaam</th>
                <th>tussenvoegsel</th>
                <th>achternaam</th>
                <th>gebruikersrol</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Arjan</td>
                <td>de</td>
                <td>Ruijter</td>
                <td>root</td>                
            </tr>
            <tr>
                <td>2</td>
                <td>Frans</td>
                <td>van</td>
                <td>Ouderkerk</td>
                <td>admin</td>                
            </tr>
            <tr>
                <td>3</td>
                <td>Hans</td>
                <td>van</td>
                <td>Tuien</td>
                <td>developer</td>                
            </tr>
            <tr>
                <td>4</td>
                <td>Fred</td>
                <td>de</td>
                <td>Bakker</td>
                <td>customer</td>                
            </tr>
            <tr>
                <td>5</td>
                <td>Freek</td>
                <td>de</td>
                <td>Boer</td>
                <td>admin</td>                
            </tr>            
        </table>
    </body>
</html>