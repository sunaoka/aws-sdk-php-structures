<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $PublicIp
 * @property string $AllocationId
 * @property string $AssociationId
 * @property string $Domain
 * @property string $PublicIpv4Pool
 * @property string $NetworkBorderGroup
 * @property string $NetworkInterfaceId
 * @property string $NetworkInterfaceOwnerId
 * @property string $PrivateIpAddress
 */
class AwsEc2EipDetails extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     PublicIp?: string,
     *     AllocationId?: string,
     *     AssociationId?: string,
     *     Domain?: string,
     *     PublicIpv4Pool?: string,
     *     NetworkBorderGroup?: string,
     *     NetworkInterfaceId?: string,
     *     NetworkInterfaceOwnerId?: string,
     *     PrivateIpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
