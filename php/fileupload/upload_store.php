<?php
if (!empty($_POST["submit"])){
    $uploadError = $_FILES["upload"]["error"];
    if ($uploadError == 0){
        switch ($_FILES["upload"]["type"]){
            case "image/jpeg":
                echo "File accepted".'<br>';
                break;
            case "image/png":
                echo "File accepted".'<br>';
                break;
            default:
                exit("not supported");
        }

        $tmpName = $_FILES["upload"]["tmp_name"];
        $fileName = $_FILES["upload"]["name"];
        $filenameArray = explode('.',$fileName);
        $fileExt = end($filenameArray);
        $fileNewName = time().rand(1000,9999).'.'.$fileExt;

        $dir = date("Y")."/".date("m")."/".date("d");

        if (!is_dir($dir)){
            mkdir($dir,0777,true);
        }else{
            echo "folder exist <br >";
        }
        $destination = $dir."/".$fileNewName;
        if (move_uploaded_file($tmpName,$destination)){
            echo "uploaded";
        }else{
            echo "not uploaded";
        }

    }else{
        if ($uploadError == 1 || $uploadError == 2){
            echo "File is to large";
        }else{
            echo "file partially uploaded";
        }

    }
}else{
    echo "not submitted";
}