<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBSecurityGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Status
 * @property string $EC2SecurityGroupName
 * @property string $EC2SecurityGroupId
 * @property string $EC2SecurityGroupOwnerId
 */
class EC2SecurityGroup extends Shape
{
    /**
     * @param array{
     *     Status?: string,
     *     EC2SecurityGroupName?: string,
     *     EC2SecurityGroupId?: string,
     *     EC2SecurityGroupOwnerId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
