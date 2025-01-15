<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBSecurityGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Status
 * @property string|null $EC2SecurityGroupName
 * @property string|null $EC2SecurityGroupId
 * @property string|null $EC2SecurityGroupOwnerId
 */
class EC2SecurityGroup extends Shape
{
    /**
     * @param array{
     *     Status?: string|null,
     *     EC2SecurityGroupName?: string|null,
     *     EC2SecurityGroupId?: string|null,
     *     EC2SecurityGroupOwnerId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
