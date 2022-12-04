<?php

class Validation
{
    // ユーザ（運営者や顧客）を登録する際の入力値を検証
    public function userRegister(array $input): boolean
    {
        $name = $input['name'];
        $email = $input['email'];

        if (empty($name) || empty($email)) {
            return false;
        }

        return true;
    }
}
