<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcSecurityGroupId
 * @property string|null $Status
 */
class VpcSecurityGroupMembership extends Shape
{
    /**
     * @param array{
     *     VpcSecurityGroupId?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
