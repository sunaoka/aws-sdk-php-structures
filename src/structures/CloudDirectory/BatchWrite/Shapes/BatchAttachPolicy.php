<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ObjectReference $PolicyReference
 * @property ObjectReference $ObjectReference
 */
class BatchAttachPolicy extends Shape
{
    /**
     * @param array{
     *     PolicyReference: ObjectReference,
     *     ObjectReference: ObjectReference
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
