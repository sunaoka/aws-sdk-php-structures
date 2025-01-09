<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ObjectAttributeRange> $RangesOnIndexedValues
 * @property ObjectReference $IndexReference
 * @property int $MaxResults
 * @property string $NextToken
 */
class BatchListIndex extends Shape
{
    /**
     * @param array{
     *     RangesOnIndexedValues?: list<ObjectAttributeRange>,
     *     IndexReference: ObjectReference,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
