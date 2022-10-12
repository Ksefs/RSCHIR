<?php
function ls() {
    $output=null;
    $result=null;
    return exec('ls /', $output, $result);
}

function ps() {
    $output=null;
    $result=null;
    return exec('ps', $output, $result);
}

function whoami() {
    $output=null;
    $result=null;
    return exec('whoami', $output, $result);
}

function id() {
    $output=null;
    $result=null;
    return exec('id', $output, $result);
}

function pwd() {
    $output=null;
    $result=null;
    return exec('pwd', $output, $result);
}
