<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeStaleSecurityGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $GroupId
 * @property string|null $GroupName
 * @property list<StaleIpPermission>|null $StaleIpPermissions
 * @property list<StaleIpPermission>|null $StaleIpPermissionsEgress
 * @property string|null $VpcId
 */
class StaleSecurityGroup extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     GroupId?: string|null,
     *     GroupName?: string|null,
     *     StaleIpPermissions?: list<StaleIpPermission>|null,
     *     StaleIpPermissionsEgress?: list<StaleIpPermission>|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
