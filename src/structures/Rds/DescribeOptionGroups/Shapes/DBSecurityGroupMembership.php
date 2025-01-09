<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOptionGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBSecurityGroupName
 * @property string $Status
 */
class DBSecurityGroupMembership extends Shape
{
    /**
     * @param array{
     *     DBSecurityGroupName?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
