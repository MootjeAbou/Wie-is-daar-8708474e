<?php
echo "Hoi gebruiker \n" ;
for ($i=0; $i < 3; $i++) {
        $line = readline("Command: ");
        readline_add_history($line);
}
?>