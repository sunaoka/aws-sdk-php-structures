<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ObjectReference $IndexReference
 * @property ObjectReference $TargetReference
 */
class BatchAttachToIndex extends Shape
{
    /**
     * @param array{
     *     IndexReference: ObjectReference,
     *     TargetReference: ObjectReference
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
