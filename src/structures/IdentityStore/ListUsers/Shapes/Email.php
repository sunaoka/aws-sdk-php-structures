<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property string $Type
 * @property bool $Primary
 */
class Email extends Shape
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
