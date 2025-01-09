<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ObjectReference $ParentReference
 * @property ObjectReference $ChildReference
 * @property string $LinkName
 */
class BatchAttachObject extends Shape
{
    /**
     * @param array{
     *     ParentReference: ObjectReference,
     *     ChildReference: ObjectReference,
     *     LinkName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
