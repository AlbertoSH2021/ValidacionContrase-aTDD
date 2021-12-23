<?php
use PHPUnit\Framework\TestCase;
class contraseña extends TestCase{
    public function test_password_strength_check($password, $min_len = 8, $max_len = 70, $req_digit = 1, $req_lower = 1, $req_upper = 1, $req_symbol = 1) {

    $regex = '/^';
    if ($req_digit == 1) { $regex .= '(?=.*\d)'; }             
    if ($req_lower == 1) { $regex .= '(?=.*[a-z])'; }         
    if ($req_upper == 1) { $regex .= '(?=.*[A-Z])'; }           
    if ($req_symbol == 1) { $regex .= '(?=.*[^a-zA-Z\d])'; }  
    $regex .= '.{' . $min_len . ',' . $max_len . '}$/';

    if(preg_match($regex, $password)) {
        return TRUE;
    } else {
        return FALSE;
    }
    $this->assertEmpty($regex);
    }
}

?>