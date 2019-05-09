//1 //8kyu

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

//2 //7kyu

function binaryArrayToNumber(array $arr) {
    
    $list = implode($arr);
    $decString = base_convert($list,2,10);
    return $decString;
}
