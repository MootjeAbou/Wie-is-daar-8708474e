<?php
for ($i=0; $i < 3; $i++) {
        $line = readline("Command: ");
        readline_add_history($line);
}

print_r(readline_list_history());

print_r(readline_info());

?php
echo 'this is a simple string';

echo 'You can also have embedded newlines in
strings this way as it is
okay to do';

echo 'Arnold once said: "I\'ll be back"';

echo 'You deleted C:\\*.*?';

echo 'You deleted C:\*.*?';

echo 'This will not expand: \n a newline';

echo 'Variables do not $expand $either';
?>

?>