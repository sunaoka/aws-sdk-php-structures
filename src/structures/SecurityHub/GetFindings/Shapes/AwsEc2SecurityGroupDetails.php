<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupName
 * @property string|null $GroupId
 * @property string|null $OwnerId
 * @property string|null $VpcId
 * @property list<AwsEc2SecurityGroupIpPermission>|null $IpPermissions
 * @property list<AwsEc2SecurityGroupIpPermission>|null $IpPermissionsEgress
 */
class AwsEc2SecurityGroupDetails extends Shape
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     GroupId?: string|null,
     *     OwnerId?: string|null,
     *     VpcId?: string|null,
     *     IpPermissions?: list<AwsEc2SecurityGroupIpPermission>|null,
     *     IpPermissionsEgress?: list<AwsEc2SecurityGroupIpPermission>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
