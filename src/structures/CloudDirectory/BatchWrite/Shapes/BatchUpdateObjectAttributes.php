<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ObjectReference $ObjectReference
 * @property list<ObjectAttributeUpdate> $AttributeUpdates
 */
class BatchUpdateObjectAttributes extends Shape
{
    /**
     * @param array{
     *     ObjectReference: ObjectReference,
     *     AttributeUpdates: list<ObjectAttributeUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
