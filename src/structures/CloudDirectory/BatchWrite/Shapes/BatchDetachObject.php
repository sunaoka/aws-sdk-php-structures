<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ObjectReference $ParentReference
 * @property string $LinkName
 * @property string $BatchReferenceName
 */
class BatchDetachObject extends Shape
{
    /**
     * @param array{
     *     ParentReference: ObjectReference,
     *     LinkName: string,
     *     BatchReferenceName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
