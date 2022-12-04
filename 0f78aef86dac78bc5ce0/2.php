<?php

class Validation
{
    // 運営者を登録する際の入力値を検証
    public function adminUserRegister(array $input): boolean
    {
        $name = $input['name'];
        $email = $input['email'];

        if (empty($name) || empty($email)) {
            return false;
        }

        return true;
    }

    // 顧客を登録する際の入力値を検証
    public function customerRegister(array $input): boolean
    {
        $name = $input['name'];
        $email = $input['email'];

        if (empty($name) || empty($email)) {
            return false;
        }

        return true;
    }
}
