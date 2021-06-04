<?php
class user
{
    private $userData;
    public function __construct($email, $password)
    {
        $this->userData = [
            (object)[
                'username' => 'Yoga',
                'email' => "yogasadhewos@gmail.com",
                'password' => "4301",
            ],
            (object)[
                'username' => 'Shalahudin',
                'email' => "shalahudin@gmail.com",
                'password' => "4301",
            ],
        ];
        $this->email = $email;
        $this->password = $password;
    }

    public function cekData($email, $password)
    {
        foreach ($this->userData as $key => $value) {
            if ($value->email == $email && $value->password == $password) {
                return true;
            }
        }
        return false;
    }

    public function cariUsername($email, $password)
    {

        $isUser = "";

        foreach ($this->userData as $key => $value) {
            if ($value->email == $email && $value->password == $password) {
                $isUser = $value;
            }
        }
        if ($isUser != NULL) {
            return $data = $isUser->username;
        } else {
            return false;
        }
    }
}
