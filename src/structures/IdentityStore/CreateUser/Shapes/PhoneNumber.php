<?php

namespace Sunaoka\Aws\Structures\IdentityStore\CreateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property string|null $Type
 * @property bool|null $Primary
 */
class PhoneNumber extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     Type?: string|null,
     *     Primary?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
