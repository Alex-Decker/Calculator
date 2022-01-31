<?php

    function diviser($val1,$val2)
    {
        if ($val2 == 0) {
            throw new Exception("division par 0 impossible");
        }
        return $val1/$val2;
    }

?>