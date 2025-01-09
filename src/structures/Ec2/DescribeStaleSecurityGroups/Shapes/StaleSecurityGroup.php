<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeStaleSecurityGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $GroupId
 * @property string $GroupName
 * @property list<StaleIpPermission> $StaleIpPermissions
 * @property list<StaleIpPermission> $StaleIpPermissionsEgress
 * @property string $VpcId
 */
class StaleSecurityGroup extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     GroupId?: string,
     *     GroupName?: string,
     *     StaleIpPermissions?: list<StaleIpPermission>,
     *     StaleIpPermissionsEgress?: list<StaleIpPermission>,
     *     VpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
