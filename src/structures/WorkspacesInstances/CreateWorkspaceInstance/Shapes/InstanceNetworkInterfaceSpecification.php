<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateWorkspaceInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AssociateCarrierIpAddress
 * @property bool|null $AssociatePublicIpAddress
 * @property ConnectionTrackingSpecificationRequest|null $ConnectionTrackingSpecification
 * @property string|null $Description
 * @property int<0, max>|null $DeviceIndex
 * @property EnaSrdSpecificationRequest|null $EnaSrdSpecification
 * @property 'interface'|'efa'|'efa-only'|null $InterfaceType
 * @property list<Ipv4PrefixSpecificationRequest>|null $Ipv4Prefixes
 * @property int<0, max>|null $Ipv4PrefixCount
 * @property int<0, max>|null $Ipv6AddressCount
 * @property list<InstanceIpv6Address>|null $Ipv6Addresses
 * @property list<Ipv6PrefixSpecificationRequest>|null $Ipv6Prefixes
 * @property int<0, max>|null $Ipv6PrefixCount
 * @property int<0, max>|null $NetworkCardIndex
 * @property string|null $NetworkInterfaceId
 * @property bool|null $PrimaryIpv6
 * @property string|null $PrivateIpAddress
 * @property list<PrivateIpAddressSpecification>|null $PrivateIpAddresses
 * @property int<0, max>|null $SecondaryPrivateIpAddressCount
 * @property list<string>|null $Groups
 * @property string|null $SubnetId
 */
class InstanceNetworkInterfaceSpecification extends Shape
{
    /**
     * @param array{
     *     AssociateCarrierIpAddress?: bool|null,
     *     AssociatePublicIpAddress?: bool|null,
     *     ConnectionTrackingSpecification?: ConnectionTrackingSpecificationRequest|null,
     *     Description?: string|null,
     *     DeviceIndex?: int<0, max>|null,
     *     EnaSrdSpecification?: EnaSrdSpecificationRequest|null,
     *     InterfaceType?: 'interface'|'efa'|'efa-only'|null,
     *     Ipv4Prefixes?: list<Ipv4PrefixSpecificationRequest>|null,
     *     Ipv4PrefixCount?: int<0, max>|null,
     *     Ipv6AddressCount?: int<0, max>|null,
     *     Ipv6Addresses?: list<InstanceIpv6Address>|null,
     *     Ipv6Prefixes?: list<Ipv6PrefixSpecificationRequest>|null,
     *     Ipv6PrefixCount?: int<0, max>|null,
     *     NetworkCardIndex?: int<0, max>|null,
     *     NetworkInterfaceId?: string|null,
     *     PrimaryIpv6?: bool|null,
     *     PrivateIpAddress?: string|null,
     *     PrivateIpAddresses?: list<PrivateIpAddressSpecification>|null,
     *     SecondaryPrivateIpAddressCount?: int<0, max>|null,
     *     Groups?: list<string>|null,
     *     SubnetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
