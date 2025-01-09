<?php

namespace Sunaoka\Aws\Structures\Chime\GetAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DisableRemoteControl
 * @property bool $EnableDialOut
 */
class AccountSettings extends Shape
{
    /**
     * @param array{
     *     DisableRemoteControl?: bool,
     *     EnableDialOut?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
