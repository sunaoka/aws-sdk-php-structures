<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcSecurityGroupId
 * @property string $Status
 */
class VpcSecurityGroupMembership extends Shape
{
    /**
     * @param array{
     *     VpcSecurityGroupId?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
