<?php

namespace Sunaoka\Aws\Structures\Organizations\ListParents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'ROOT'|'ORGANIZATIONAL_UNIT' $Type
 */
class ParentShape extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Type?: 'ROOT'|'ORGANIZATIONAL_UNIT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
