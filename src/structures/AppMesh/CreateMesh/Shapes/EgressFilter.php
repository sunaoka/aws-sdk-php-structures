<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateMesh\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW_ALL'|'DROP_ALL' $type
 */
class EgressFilter extends Shape
{
    /**
     * @param array{type: 'ALLOW_ALL'|'DROP_ALL'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
