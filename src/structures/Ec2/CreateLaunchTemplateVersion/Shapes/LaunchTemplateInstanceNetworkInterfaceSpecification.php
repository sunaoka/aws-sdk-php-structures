<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AssociateCarrierIpAddress
 * @property bool|null $AssociatePublicIpAddress
 * @property bool|null $DeleteOnTermination
 * @property string|null $Description
 * @property int|null $DeviceIndex
 * @property list<string>|null $Groups
 * @property string|null $InterfaceType
 * @property int|null $Ipv6AddressCount
 * @property list<InstanceIpv6Address>|null $Ipv6Addresses
 * @property string|null $NetworkInterfaceId
 * @property string|null $PrivateIpAddress
 * @property list<PrivateIpAddressSpecification>|null $PrivateIpAddresses
 * @property int|null $SecondaryPrivateIpAddressCount
 * @property string|null $SubnetId
 * @property int|null $NetworkCardIndex
 * @property list<Ipv4PrefixSpecificationResponse>|null $Ipv4Prefixes
 * @property int|null $Ipv4PrefixCount
 * @property list<Ipv6PrefixSpecificationResponse>|null $Ipv6Prefixes
 * @property int|null $Ipv6PrefixCount
 * @property bool|null $PrimaryIpv6
 * @property LaunchTemplateEnaSrdSpecification|null $EnaSrdSpecification
 * @property ConnectionTrackingSpecification|null $ConnectionTrackingSpecification
 * @property int|null $EnaQueueCount
 */
class LaunchTemplateInstanceNetworkInterfaceSpecification extends Shape
{
    /**
     * @param array{
     *     AssociateCarrierIpAddress?: bool|null,
     *     AssociatePublicIpAddress?: bool|null,
     *     DeleteOnTermination?: bool|null,
     *     Description?: string|null,
     *     DeviceIndex?: int|null,
     *     Groups?: list<string>|null,
     *     InterfaceType?: string|null,
     *     Ipv6AddressCount?: int|null,
     *     Ipv6Addresses?: list<InstanceIpv6Address>|null,
     *     NetworkInterfaceId?: string|null,
     *     PrivateIpAddress?: string|null,
     *     PrivateIpAddresses?: list<PrivateIpAddressSpecification>|null,
     *     SecondaryPrivateIpAddressCount?: int|null,
     *     SubnetId?: string|null,
     *     NetworkCardIndex?: int|null,
     *     Ipv4Prefixes?: list<Ipv4PrefixSpecificationResponse>|null,
     *     Ipv4PrefixCount?: int|null,
     *     Ipv6Prefixes?: list<Ipv6PrefixSpecificationResponse>|null,
     *     Ipv6PrefixCount?: int|null,
     *     PrimaryIpv6?: bool|null,
     *     EnaSrdSpecification?: LaunchTemplateEnaSrdSpecification|null,
     *     ConnectionTrackingSpecification?: ConnectionTrackingSpecification|null,
     *     EnaQueueCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
