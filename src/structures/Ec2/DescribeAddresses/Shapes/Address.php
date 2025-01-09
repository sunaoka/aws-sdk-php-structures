<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AllocationId
 * @property string $AssociationId
 * @property 'vpc'|'standard' $Domain
 * @property string $NetworkInterfaceId
 * @property string $NetworkInterfaceOwnerId
 * @property string $PrivateIpAddress
 * @property list<Tag> $Tags
 * @property string $PublicIpv4Pool
 * @property string $NetworkBorderGroup
 * @property string $CustomerOwnedIp
 * @property string $CustomerOwnedIpv4Pool
 * @property string $CarrierIp
 * @property string $InstanceId
 * @property string $PublicIp
 */
class Address extends Shape
{
    /**
     * @param array{
     *     AllocationId?: string,
     *     AssociationId?: string,
     *     Domain?: 'vpc'|'standard',
     *     NetworkInterfaceId?: string,
     *     NetworkInterfaceOwnerId?: string,
     *     PrivateIpAddress?: string,
     *     Tags?: list<Tag>,
     *     PublicIpv4Pool?: string,
     *     NetworkBorderGroup?: string,
     *     CustomerOwnedIp?: string,
     *     CustomerOwnedIpv4Pool?: string,
     *     CarrierIp?: string,
     *     InstanceId?: string,
     *     PublicIp?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
