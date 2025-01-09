<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ObjectAttributeRange> $RangesOnIndexedValues
 * @property ObjectReference $IndexReference
 * @property int<1, max> $MaxResults
 * @property string $NextToken
 */
class BatchListIndex extends Shape
{
    /**
     * @param array{
     *     RangesOnIndexedValues?: list<ObjectAttributeRange>,
     *     IndexReference: ObjectReference,
     *     MaxResults?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
