<!-- Balanced Bracket -->

<?php

    function balancedBracket($input){
        $input = str_replace(' ', '', $input);

        $stack = [];

        $pairs = [
            ')' => '(',
            '}' => '{',
            ']' => '[',
        ];

        for($i = 0; $i < strlen($input); $i++){
            $char = $input[$i];

            if(in_array($char, ['(', '{', '['])){
                array_push($stack, $char);
            }elseif(in_array($char, [')', '}', ']'])){
                if(empty($stack) || array_pop($stack) !== $pairs[$char]){
                    return "NO";
                }
            }else{
                return "NO";
            }
        }

        return empty($stack) ? "YES" : "NO";
    }

    echo balancedBracket("{ [ ( ) ] }") . PHP_EOL;
    echo balancedBracket("{ [ ( ] ) }") . PHP_EOL;
    echo balancedBracket("{ ( ( [ ] ) [ ] ) [ ] }") . PHP_EOL;
?>