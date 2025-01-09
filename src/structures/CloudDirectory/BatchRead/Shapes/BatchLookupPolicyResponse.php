<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PolicyToPath> $PolicyToPathList
 * @property string $NextToken
 */
class BatchLookupPolicyResponse extends Shape
{
    /**
     * @param array{
     *     PolicyToPathList?: list<PolicyToPath>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
