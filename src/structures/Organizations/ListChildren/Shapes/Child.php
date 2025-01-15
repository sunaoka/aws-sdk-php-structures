<?php

namespace Sunaoka\Aws\Structures\Organizations\ListChildren\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'ACCOUNT'|'ORGANIZATIONAL_UNIT'|null $Type
 */
class Child extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Type?: 'ACCOUNT'|'ORGANIZATIONAL_UNIT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
