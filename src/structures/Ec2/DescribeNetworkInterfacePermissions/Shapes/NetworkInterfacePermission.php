<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfacePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkInterfacePermissionId
 * @property string $NetworkInterfaceId
 * @property string $AwsAccountId
 * @property string $AwsService
 * @property 'INSTANCE-ATTACH'|'EIP-ASSOCIATE' $Permission
 * @property NetworkInterfacePermissionState $PermissionState
 */
class NetworkInterfacePermission extends Shape
{
    /**
     * @param array{
     *     NetworkInterfacePermissionId?: string,
     *     NetworkInterfaceId?: string,
     *     AwsAccountId?: string,
     *     AwsService?: string,
     *     Permission?: 'INSTANCE-ATTACH'|'EIP-ASSOCIATE',
     *     PermissionState?: NetworkInterfacePermissionState
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
