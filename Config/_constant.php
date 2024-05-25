<?php
    define("DS", "/");
    define("HTTP", $_SERVER["REQUEST_SCHEME"]);
    define("FOLDER_NAME", $_SERVER["REQUEST_URI"]);
    define("INDEX", HTTP.':'.DS.FOLDER_NAME.'index.php'.DS);

    define("CONTROLLER_PATH", 'Controller'.DS);
    define("MODEL_PATH", 'Model'.DS);
    define("VIEW_PATH", 'View'.DS);
    define("CONFIG_PATH", 'Config'.DS);

?>