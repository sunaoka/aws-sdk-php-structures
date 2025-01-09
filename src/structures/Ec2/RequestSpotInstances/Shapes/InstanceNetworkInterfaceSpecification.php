<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AssociatePublicIpAddress
 * @property bool $DeleteOnTermination
 * @property string $Description
 * @property int $DeviceIndex
 * @property list<string> $Groups
 * @property int $Ipv6AddressCount
 * @property list<InstanceIpv6Address> $Ipv6Addresses
 * @property string $NetworkInterfaceId
 * @property string $PrivateIpAddress
 * @property list<PrivateIpAddressSpecification> $PrivateIpAddresses
 * @property int $SecondaryPrivateIpAddressCount
 * @property string $SubnetId
 * @property bool $AssociateCarrierIpAddress
 * @property string $InterfaceType
 * @property int $NetworkCardIndex
 * @property list<Ipv4PrefixSpecificationRequest> $Ipv4Prefixes
 * @property int $Ipv4PrefixCount
 * @property list<Ipv6PrefixSpecificationRequest> $Ipv6Prefixes
 * @property int $Ipv6PrefixCount
 * @property bool $PrimaryIpv6
 * @property EnaSrdSpecificationRequest $EnaSrdSpecification
 * @property ConnectionTrackingSpecificationRequest $ConnectionTrackingSpecification
 */
class InstanceNetworkInterfaceSpecification extends Shape
{
    /**
     * @param array{
     *     AssociatePublicIpAddress?: bool,
     *     DeleteOnTermination?: bool,
     *     Description?: string,
     *     DeviceIndex?: int,
     *     Groups?: list<string>,
     *     Ipv6AddressCount?: int,
     *     Ipv6Addresses?: list<InstanceIpv6Address>,
     *     NetworkInterfaceId?: string,
     *     PrivateIpAddress?: string,
     *     PrivateIpAddresses?: list<PrivateIpAddressSpecification>,
     *     SecondaryPrivateIpAddressCount?: int,
     *     SubnetId?: string,
     *     AssociateCarrierIpAddress?: bool,
     *     InterfaceType?: string,
     *     NetworkCardIndex?: int,
     *     Ipv4Prefixes?: list<Ipv4PrefixSpecificationRequest>,
     *     Ipv4PrefixCount?: int,
     *     Ipv6Prefixes?: list<Ipv6PrefixSpecificationRequest>,
     *     Ipv6PrefixCount?: int,
     *     PrimaryIpv6?: bool,
     *     EnaSrdSpecification?: EnaSrdSpecificationRequest,
     *     ConnectionTrackingSpecification?: ConnectionTrackingSpecificationRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
