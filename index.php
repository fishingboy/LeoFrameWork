<?php
echo "index.php<br>";
echo "REQUEST_URI = " . $_SERVER['REQUEST_URI'] . "<br>";
echo "route = <pre>" . print_r(route(), true) . "</pre>";

function route()
{
    $URI = $_SERVER['REQUEST_URI'];
    $tmp = explode('/', $URI);
    if (count($tmp) == 1) return FALSE;

    $_args = array();
    $arg_num = 0;
    for ($i=1, $i_max=count($tmp); $i < $i_max; $i++) 
    { 
        if ($i == 1)
        {
            $controller = $tmp[$i];
        }
        else if ($i == 2)
        {
            $method = $tmp[$i];
        }
        else
        {
            $_args[] = $tmp[$i];
        }
    }

    return array
    (
        'controller' => $controller,
        'method'     => $method,
        'args'       => $_args
    );
}
?>