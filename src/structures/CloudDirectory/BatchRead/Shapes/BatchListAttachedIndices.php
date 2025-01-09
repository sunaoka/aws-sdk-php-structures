<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ObjectReference $TargetReference
 * @property string $NextToken
 * @property int $MaxResults
 */
class BatchListAttachedIndices extends Shape
{
    /**
     * @param array{
     *     TargetReference: ObjectReference,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
