<?php

echo "Hoi gebruiker \n" ;
for ($i=0; $i < 3; $i++) {
        $line = readline("opmerking: ");
        readline_add_history($line);
}

?>