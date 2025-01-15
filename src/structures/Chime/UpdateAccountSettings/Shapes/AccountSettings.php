<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DisableRemoteControl
 * @property bool|null $EnableDialOut
 */
class AccountSettings extends Shape
{
    /**
     * @param array{
     *     DisableRemoteControl?: bool|null,
     *     EnableDialOut?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
