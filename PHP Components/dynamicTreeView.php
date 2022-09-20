<?php 

    $con = mysqli_connect('localhost','root','','dynamictree_db');
    $res = mysqli_query($con, "select * from city");
    $arr =[];
    while($row = mysqli_fetch_assoc($res)){
        // print_r($row);
        $arr[$row['id']]['city']= $row['city'];
        $arr[$row['id']]['parent_id'] = $row['parent_id'];
    }
    buildTreeView($arr,0);
    function buildTreeView($arr, $parent, $level = 0, $prelevel = -1){
        echo " ".$level;
            foreach ($arr as $id => $data) {
                // print_r($data['parent_id']);
                if($parent == $data['parent_id']){    
                    if($level > $prelevel){
                        echo " fi";
                       echo "<ol>";
                    }
                    if($level == $prelevel){
                        echo " li";
                        echo "</li>";
                    }
                    echo "<li>" . $data['city'];
                    if($level > $prelevel){
                        $prelevel = $level;
                        echo " h";
                    }
                    $level++ ;
                    buildTreeView($arr ,$id, $level, $prelevel);
                    $level-- ; 
                    // echo $level;
                }
            }
            if($level == $prelevel){
                echo "</li></ol>";
            }
    };
    // echo "<pre>";
    // print_r ($arr);

    