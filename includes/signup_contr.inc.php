<?php

function is_input_empty($username,$pwd,$email) {
    if(empty($username) || empty($pwd) || empty($email)) {
        return true;
    }
    else {
        return false;
    }
}   