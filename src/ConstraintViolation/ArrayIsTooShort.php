<?php

declare(strict_types=1);

namespace Flaksp\UserInputProcessor\ConstraintViolation;

use Flaksp\UserInputProcessor\AbstractPointer;

final class ArrayIsTooShort implements ConstraintViolationInterface
{
    public const TYPE = 'array_is_too_short';

    public function __construct(
        private AbstractPointer $pointer,
        private int $minLength
    ) {
    }

    public static function getType(): string
    {
        return self::TYPE;
    }

    public function getDescription(): string
    {
        return sprintf(
            'Property "%s" contains too short array.',
            $this->pointer->getPointer(),
        );
    }

    public function getMinLength(): int
    {
        return $this->minLength;
    }

    public function getPointer(): AbstractPointer
    {
        return $this->pointer;
    }
}
