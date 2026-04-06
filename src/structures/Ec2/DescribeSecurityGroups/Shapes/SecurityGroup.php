<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecurityGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupId
 * @property list<IpPermission>|null $IpPermissionsEgress
 * @property list<Tag>|null $Tags
 * @property string|null $VpcId
 * @property string|null $SecurityGroupArn
 * @property string|null $OwnerId
 * @property string|null $GroupName
 * @property string|null $Description
 * @property list<IpPermission>|null $IpPermissions
 */
class SecurityGroup extends Shape
{
    /**
     * @param array{
     *     GroupId?: string|null,
     *     IpPermissionsEgress?: list<IpPermission>|null,
     *     Tags?: list<Tag>|null,
     *     VpcId?: string|null,
     *     SecurityGroupArn?: string|null,
     *     OwnerId?: string|null,
     *     GroupName?: string|null,
     *     Description?: string|null,
     *     IpPermissions?: list<IpPermission>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
