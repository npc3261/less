<?php
        include_once('./lessphp/lessc.inc.php');
        
        $less = new lessc();
        
        $css = $less->compile("
        
        // Maak een nieuwe pagina die 2 verschillende tabellen laat zien met ieder 5 records. De opmaak van de tabellen moet
        // worden geregeld door dezelfde geparametriseerde LESS mixin met guard. 
        
        
        .tblDefault(@margin, @border, @color, @fontFamily, @weight, @padding, @borderCollapse: collapse)
        { 
                margin: @margin;
                border-collapse: @borderCollapse;
                
                tr{
                    &:nth-child(2n){
                    background-color: lighten(@color, 20%);
                    }
                    &:nth-child(2n + 1){
                    background-color: lighten(@color, 30%);
                    }
                }
                
                td{
                    border:@border @color;
                    margin: @margin;
                    padding: @padding;
                    font-family:@fontFamily;
                    font-weight: @weight;
                    
                }
                
                th{
                    border:@border @color;
                    margin: @margin;
                    padding: @padding;
                    background-color: darken(@color,50%);
                    color:lighten(@color,10%);
                    
                }
                
                     
        }
        
        
        
        #tbl1
        {
            .tblDefault(2em, 2px solid, rgb(245, 137, 54), ~'Arial, Helvetica, sans-serif', 900, 1em, collapse);
        }
        
        #tbl2
        {
            .tblDefault(1em, 2px solid, rgb(54, 119, 232), ~'Arial, Helvetica, sans-serif', 1000, 1em, collapse);
        }
");?>


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