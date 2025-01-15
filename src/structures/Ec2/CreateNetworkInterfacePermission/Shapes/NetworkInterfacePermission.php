<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterfacePermission\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkInterfacePermissionId
 * @property string|null $NetworkInterfaceId
 * @property string|null $AwsAccountId
 * @property string|null $AwsService
 * @property 'INSTANCE-ATTACH'|'EIP-ASSOCIATE'|null $Permission
 * @property NetworkInterfacePermissionState|null $PermissionState
 */
class NetworkInterfacePermission extends Shape
{
    /**
     * @param array{
     *     NetworkInterfacePermissionId?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     AwsAccountId?: string|null,
     *     AwsService?: string|null,
     *     Permission?: 'INSTANCE-ATTACH'|'EIP-ASSOCIATE'|null,
     *     PermissionState?: NetworkInterfacePermissionState|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
