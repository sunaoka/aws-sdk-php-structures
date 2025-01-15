<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSecurityGroupsForVpc\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $GroupName
 * @property string|null $OwnerId
 * @property string|null $GroupId
 * @property list<Tag>|null $Tags
 * @property string|null $PrimaryVpcId
 */
class SecurityGroupForVpc extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     GroupName?: string|null,
     *     OwnerId?: string|null,
     *     GroupId?: string|null,
     *     Tags?: list<Tag>|null,
     *     PrimaryVpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
