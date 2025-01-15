<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AttachedPolicyIds
 * @property string|null $NextToken
 */
class BatchListObjectPoliciesResponse extends Shape
{
    /**
     * @param array{
     *     AttachedPolicyIds?: list<string>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
