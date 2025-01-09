<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateClusterSecurityGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Status
 * @property string $EC2SecurityGroupName
 * @property string $EC2SecurityGroupOwnerId
 * @property list<Tag> $Tags
 */
class EC2SecurityGroup extends Shape
{
    /**
     * @param array{
     *     Status?: string,
     *     EC2SecurityGroupName?: string,
     *     EC2SecurityGroupOwnerId?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
