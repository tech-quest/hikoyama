<?php
namespace App\useCaseQuestion\Kouichi\q1\UseCase\UseCaseInput;

use App\Domain\ValueObject\Email;
use App\Domain\ValueObject\InputPassword;

final class SignInInput
{
    private $email;
    private $password;

    public function __construct(Email $email, InputPassword $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function email(): Email
    {
        return $this->email;
    }

    public function password(): InputPassword
    {
        return $this->password;
    }
}
