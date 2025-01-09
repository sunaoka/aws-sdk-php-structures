<?php

namespace Sunaoka\Aws\Structures\Iam\SimulateCustomPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourcePolicyId
 * @property 'user'|'group'|'role'|'aws-managed'|'user-managed'|'resource'|'none' $SourcePolicyType
 * @property Position $StartPosition
 * @property Position $EndPosition
 */
class Statement extends Shape
{
    /**
     * @param array{
     *     SourcePolicyId?: string,
     *     SourcePolicyType?: 'user'|'group'|'role'|'aws-managed'|'user-managed'|'resource'|'none',
     *     StartPosition?: Position,
     *     EndPosition?: Position
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
