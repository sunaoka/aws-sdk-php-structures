<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property string|null $PublicIp
 * @property string|null $AllocationId
 * @property string|null $AssociationId
 * @property string|null $Domain
 * @property string|null $PublicIpv4Pool
 * @property string|null $NetworkBorderGroup
 * @property string|null $NetworkInterfaceId
 * @property string|null $NetworkInterfaceOwnerId
 * @property string|null $PrivateIpAddress
 */
class AwsEc2EipDetails extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     PublicIp?: string|null,
     *     AllocationId?: string|null,
     *     AssociationId?: string|null,
     *     Domain?: string|null,
     *     PublicIpv4Pool?: string|null,
     *     NetworkBorderGroup?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     NetworkInterfaceOwnerId?: string|null,
     *     PrivateIpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
