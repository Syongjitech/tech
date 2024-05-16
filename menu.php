<?php   

    function query_sql(){
        $mysqli = new mysqli("127.0.0.1", "root", "root", "thinkphp");
        $sqls = func_get_args();
        foreach($sqls as $s){
            $query = $mysqli->query($s);
        }
        $mysqli->close();
        return $query;
    }

    //查询表
    $sql = "SELECT name,icon,c,a FROM ry_auth";
    $query = query_sql($sql);
    while($row = $query->fetch_assoc()){
        $data[] = $row;
    }
    
    $menu = json_encode($data,JSON_UNESCAPED_UNICODE);
    
    //转换成字符串JSON
    //var_dump($menu);
    echo($menu);
?>