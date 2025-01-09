<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AttachedPolicyIds
 * @property string $NextToken
 */
class BatchListObjectPoliciesResponse extends Shape
{
    /**
     * @param array{
     *     AttachedPolicyIds?: list<string>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
