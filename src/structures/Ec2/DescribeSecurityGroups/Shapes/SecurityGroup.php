<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecurityGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupId
 * @property list<IpPermission> $IpPermissionsEgress
 * @property list<Tag> $Tags
 * @property string $VpcId
 * @property string $SecurityGroupArn
 * @property string $OwnerId
 * @property string $GroupName
 * @property string $Description
 * @property list<IpPermission> $IpPermissions
 */
class SecurityGroup extends Shape
{
    /**
     * @param array{
     *     GroupId?: string,
     *     IpPermissionsEgress?: list<IpPermission>,
     *     Tags?: list<Tag>,
     *     VpcId?: string,
     *     SecurityGroupArn?: string,
     *     OwnerId?: string,
     *     GroupName?: string,
     *     Description?: string,
     *     IpPermissions?: list<IpPermission>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
