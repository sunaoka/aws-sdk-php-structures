<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ObjectReference $ObjectReference
 * @property string $NextToken
 * @property int<1, max> $MaxResults
 */
class BatchListObjectPolicies extends Shape
{
    /**
     * @param array{
     *     ObjectReference: ObjectReference,
     *     NextToken?: string,
     *     MaxResults?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
