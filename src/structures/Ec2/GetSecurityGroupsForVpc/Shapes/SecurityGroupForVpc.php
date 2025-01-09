<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSecurityGroupsForVpc\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $GroupName
 * @property string $OwnerId
 * @property string $GroupId
 * @property list<Tag> $Tags
 * @property string $PrimaryVpcId
 */
class SecurityGroupForVpc extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     GroupName?: string,
     *     OwnerId?: string,
     *     GroupId?: string,
     *     Tags?: list<Tag>,
     *     PrimaryVpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
