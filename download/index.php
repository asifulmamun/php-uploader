<center>
    <h1>Download Your file</h1>
    <h4>Developer: <a href="https://asifulmamun.info">Al Mamun - asifulmamun</a></h4>
    <a href="./../delete.php">Clear All Files</a>
</center>

<div class="container">
<?php
$handle = fopen("./../files.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        
        if(!strstr( $line, 'http')){
            echo $line . '<br>';
        }

        if(strstr( $line, 'http')){
            echo '<a class="dn_button" target="_blank" href="' . $line . '">Download</a>&nbsp;&nbsp;|&nbsp;&nbsp;' . $line . '<br>';
        }
        
    }

    fclose($handle);
} else {
    // error opening the file.
} 
?> 
</div><br><br><br><br>

<style>
/* global */
*{
    margin: 0;
    padding: 0;
}

.container{
    padding-left: 50px;
}

.dn_button{
    text-decoration: none;
    font-size: 14px;
    padding: 6px 15px;
    background-color: #4400ffad;
    color: #fff;
    display: inline-block;
    margin: 2px 0px;
    border-radius: 3px;
}
</style>