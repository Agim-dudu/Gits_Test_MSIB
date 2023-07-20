<?php
function isBalancedBracket($str) {
    $stack = array();
    $bracketMap = array(
        ')' => '(',
        '}' => '{',
        ']' => '['
    );

    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];

        if ($char == '(' || $char == '{' || $char == '[') {
            array_push($stack, $char);
        } elseif ($char == ')' || $char == '}' || $char == ']') {
            if (empty($stack)) {
                return "NO";
            }

            $top = array_pop($stack);

            if ($bracketMap[$char] != $top) {
                return "NO";
            }
        }
    }

    return empty($stack) ? "YES" : "NO";
}

// Memanggil Fungsi
$sampel1 = "{[()]}";
$sampel2 = "{[(])}";
$sampel3 = "{(([])[])[]}";

echo "Sampel 1: " . isBalancedBracket($sampel1) . PHP_EOL;
echo "Sampel 2: " . isBalancedBracket($sampel2) . PHP_EOL;
echo "Sampel 3: " . isBalancedBracket($sampel3) . PHP_EOL;
?>