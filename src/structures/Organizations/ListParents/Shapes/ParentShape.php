<?php

namespace Sunaoka\Aws\Structures\Organizations\ListParents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'ROOT'|'ORGANIZATIONAL_UNIT'|null $Type
 */
class ParentShape extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Type?: 'ROOT'|'ORGANIZATIONAL_UNIT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
