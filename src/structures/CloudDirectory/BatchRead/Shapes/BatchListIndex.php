<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ObjectAttributeRange>|null $RangesOnIndexedValues
 * @property ObjectReference $IndexReference
 * @property int<1, max>|null $MaxResults
 * @property string|null $NextToken
 */
class BatchListIndex extends Shape
{
    /**
     * @param array{
     *     RangesOnIndexedValues?: list<ObjectAttributeRange>|null,
     *     IndexReference: ObjectReference,
     *     MaxResults?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
