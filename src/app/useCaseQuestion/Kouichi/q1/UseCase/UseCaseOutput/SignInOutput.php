<?php
namespace App\useCaseQuestion\Kouichi\q1\UseCase\UseCaseOutput;

final class SignInOutput
{
    private $isSuccess;
    private $message;

    public function __construct(bool $isSuccess, string $message)
    {
        $this->isSuccess = $isSuccess;
        $this->message = $message;
    }

    public function isSuccess(): bool
    {
        return $this->isSuccess;
    }

    public function message(): string
    {
        return $this->message;
    }
}
