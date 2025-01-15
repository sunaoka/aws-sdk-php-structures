<?php

namespace Sunaoka\Aws\Structures\Iam\SimulateCustomPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourcePolicyId
 * @property 'user'|'group'|'role'|'aws-managed'|'user-managed'|'resource'|'none'|null $SourcePolicyType
 * @property Position|null $StartPosition
 * @property Position|null $EndPosition
 */
class Statement extends Shape
{
    /**
     * @param array{
     *     SourcePolicyId?: string|null,
     *     SourcePolicyType?: 'user'|'group'|'role'|'aws-managed'|'user-managed'|'resource'|'none'|null,
     *     StartPosition?: Position|null,
     *     EndPosition?: Position|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
