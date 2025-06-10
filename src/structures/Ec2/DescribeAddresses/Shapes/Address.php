<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AllocationId
 * @property string|null $AssociationId
 * @property 'vpc'|'standard'|null $Domain
 * @property string|null $NetworkInterfaceId
 * @property string|null $NetworkInterfaceOwnerId
 * @property string|null $PrivateIpAddress
 * @property list<Tag>|null $Tags
 * @property string|null $PublicIpv4Pool
 * @property string|null $NetworkBorderGroup
 * @property string|null $CustomerOwnedIp
 * @property string|null $CustomerOwnedIpv4Pool
 * @property string|null $CarrierIp
 * @property string|null $SubnetId
 * @property 'alb'|'nlb'|'rnat'|null $ServiceManaged
 * @property string|null $InstanceId
 * @property string|null $PublicIp
 */
class Address extends Shape
{
    /**
     * @param array{
     *     AllocationId?: string|null,
     *     AssociationId?: string|null,
     *     Domain?: 'vpc'|'standard'|null,
     *     NetworkInterfaceId?: string|null,
     *     NetworkInterfaceOwnerId?: string|null,
     *     PrivateIpAddress?: string|null,
     *     Tags?: list<Tag>|null,
     *     PublicIpv4Pool?: string|null,
     *     NetworkBorderGroup?: string|null,
     *     CustomerOwnedIp?: string|null,
     *     CustomerOwnedIpv4Pool?: string|null,
     *     CarrierIp?: string|null,
     *     SubnetId?: string|null,
     *     ServiceManaged?: 'alb'|'nlb'|'rnat'|null,
     *     InstanceId?: string|null,
     *     PublicIp?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
