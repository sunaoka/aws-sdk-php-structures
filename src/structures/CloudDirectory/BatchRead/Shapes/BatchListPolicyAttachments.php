<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ObjectReference $PolicyReference
 * @property string $NextToken
 * @property int $MaxResults
 */
class BatchListPolicyAttachments extends Shape
{
    /**
     * @param array{
     *     PolicyReference: ObjectReference,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
