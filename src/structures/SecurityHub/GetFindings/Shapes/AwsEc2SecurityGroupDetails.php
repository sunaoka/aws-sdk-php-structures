<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupName
 * @property string $GroupId
 * @property string $OwnerId
 * @property string $VpcId
 * @property list<AwsEc2SecurityGroupIpPermission> $IpPermissions
 * @property list<AwsEc2SecurityGroupIpPermission> $IpPermissionsEgress
 */
class AwsEc2SecurityGroupDetails extends Shape
{
    /**
     * @param array{
     *     GroupName?: string,
     *     GroupId?: string,
     *     OwnerId?: string,
     *     VpcId?: string,
     *     IpPermissions?: list<AwsEc2SecurityGroupIpPermission>,
     *     IpPermissionsEgress?: list<AwsEc2SecurityGroupIpPermission>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
