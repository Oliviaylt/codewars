//1 //8kyu //Basic Mathematical Operations

function basicOp($op, $val1, $val2)
{
  switch ($op) {
    case '+':
    return $val1 + $val2;
    case '-':
    return $val1 - $val2;
    case '*':
    return $val1 * $val2;
    case '/':
    return $val1 / $val2;
    default :
    echo "There are only basic operator '+' '-' '*' '/'";
}
}

//2 //7kyu //Ones and Zeros

function binaryArrayToNumber(array $arr) {
    
    $list = implode($arr);
    $decString = base_convert($list,2,10);
    return $decString;
}

//3 //8kyu //Beginner - Reduce but Grow

function grow(array $a) 
{   
    $size = sizeof($a) / sizeof($a[0]); 
    $total = 1; 
    for ($i = 0; $i < $size; $i++)  
        $total = $total * $a[$i]; 
    return $total; 
}
