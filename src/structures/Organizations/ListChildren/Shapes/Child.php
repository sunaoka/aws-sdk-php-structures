<?php

namespace Sunaoka\Aws\Structures\Organizations\ListChildren\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'ACCOUNT'|'ORGANIZATIONAL_UNIT' $Type
 */
class Child extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Type?: 'ACCOUNT'|'ORGANIZATIONAL_UNIT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
