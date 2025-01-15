<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PolicyToPath>|null $PolicyToPathList
 * @property string|null $NextToken
 */
class BatchLookupPolicyResponse extends Shape
{
    /**
     * @param array{
     *     PolicyToPathList?: list<PolicyToPath>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
