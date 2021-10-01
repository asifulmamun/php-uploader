<h1>
    Deleted all files. Now got to downlaod page.
</h1>

<a href="./download">Download</a>

<br><br>
<?php
    
    // Replace with new file files.txt
    $file = fopen("files.txt","w");
    // echo fwrite($file,"");
    fclose($file);


/*
    Delete all files from files folder. 
 */

    // Folder path to be flushed
    $folder_path = "files";

    // List of name of files inside
    // specified folder
    $files = glob($folder_path.'/*');
    
    // Deleting all the files in the list
    foreach($files as $file) {
    
        if(is_file($file)) 
            // Delete the given file
            unlink($file);     
    }

?>