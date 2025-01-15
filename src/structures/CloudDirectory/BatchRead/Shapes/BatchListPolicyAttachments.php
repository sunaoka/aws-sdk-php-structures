<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ObjectReference $PolicyReference
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 */
class BatchListPolicyAttachments extends Shape
{
    /**
     * @param array{
     *     PolicyReference: ObjectReference,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
