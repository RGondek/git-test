<?php
    function soma($x, $y){ 
        return ($x + $y);
    }
    function sub($x, $y){ 
        return ($x - $y);
    }
    function mult($x, $y, &$res){ 
        $res = ($x * $y);
    }
    function div($x, $y, &$res){ 
        $res = ($x / $y);
    }
    