<?php

namespace App\useCaseQuestion\Kouichi\q1\UseCase\UseCaseInput;

require_once __DIR__ . '/../../../../../../vendor/autoload.php';
use App\useCaseQuestion\Kouichi\q1\Domain\ValueObject\UserName;
use App\useCaseQuestion\Kouichi\q1\Domain\ValueObject\Email;
use App\useCaseQuestion\Kouichi\q1\Domain\ValueObject\InputPassword;

/**
 * ユーザー登録ユースケースの入力値
 */
final class SignUpInput
{
    /**
     * @var UserName
     */
    private $name;

    /**
     * @var Email
     */
    private $email;

    /**
     * @var InputPassword
     */
    private $password;

    /**
     * コンストラクタ
     *
     * @param UserName $name
     * @param Email $email
     * @param InputPassword $password
     */
    public function __construct(
        UserName $name,
        Email $email,
        InputPassword $password
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return UserName
     */
    public function name(): UserName
    {
        return $this->name;
    }

    /**
     * @return Email
     */
    public function email(): Email
    {
        return $this->email;
    }

    /**
     * @return InputPassword
     */
    public function password(): InputPassword
    {
        return $this->password;
    }
}
