<?php
    $username = "Fred Smith";
    echo $username;
    echo "<br>";
    $current_user = $username;
    echo $current_user;
    echo "<br>";

    $author = "Brian W. Kernighan";

    echo <<<_END
        Debugging is twice as hard as writing the code in the first place. 
        Therefore, if you write the code as cleverly as possible, you are,
        by definition, not smart enough to debug it.

        - $author;
    _END; 
?>