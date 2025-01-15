<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ObjectReference $ObjectReference
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 */
class BatchListObjectPolicies extends Shape
{
    /**
     * @param array{
     *     ObjectReference: ObjectReference,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
