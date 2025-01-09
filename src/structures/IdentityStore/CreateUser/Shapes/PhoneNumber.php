<?php

namespace Sunaoka\Aws\Structures\IdentityStore\CreateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property string $Type
 * @property bool $Primary
 */
class PhoneNumber extends Shape
{
    /**
     * @param array{
     *     Value?: string,
     *     Type?: string,
     *     Primary?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
