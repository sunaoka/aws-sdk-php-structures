<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ObjectReference $ObjectReference
 */
class BatchDeleteObject extends Shape
{
    /**
     * @param array{ObjectReference: ObjectReference} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
