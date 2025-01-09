<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLaunchTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AssociateCarrierIpAddress
 * @property bool $AssociatePublicIpAddress
 * @property bool $DeleteOnTermination
 * @property string $Description
 * @property int $DeviceIndex
 * @property list<string> $Groups
 * @property string $InterfaceType
 * @property int $Ipv6AddressCount
 * @property list<InstanceIpv6Address> $Ipv6Addresses
 * @property string $NetworkInterfaceId
 * @property string $PrivateIpAddress
 * @property list<PrivateIpAddressSpecification> $PrivateIpAddresses
 * @property int $SecondaryPrivateIpAddressCount
 * @property string $SubnetId
 * @property int $NetworkCardIndex
 * @property list<Ipv4PrefixSpecificationResponse> $Ipv4Prefixes
 * @property int $Ipv4PrefixCount
 * @property list<Ipv6PrefixSpecificationResponse> $Ipv6Prefixes
 * @property int $Ipv6PrefixCount
 * @property bool $PrimaryIpv6
 * @property LaunchTemplateEnaSrdSpecification $EnaSrdSpecification
 * @property ConnectionTrackingSpecification $ConnectionTrackingSpecification
 */
class LaunchTemplateInstanceNetworkInterfaceSpecification extends Shape
{
    /**
     * @param array{
     *     AssociateCarrierIpAddress?: bool,
     *     AssociatePublicIpAddress?: bool,
     *     DeleteOnTermination?: bool,
     *     Description?: string,
     *     DeviceIndex?: int,
     *     Groups?: list<string>,
     *     InterfaceType?: string,
     *     Ipv6AddressCount?: int,
     *     Ipv6Addresses?: list<InstanceIpv6Address>,
     *     NetworkInterfaceId?: string,
     *     PrivateIpAddress?: string,
     *     PrivateIpAddresses?: list<PrivateIpAddressSpecification>,
     *     SecondaryPrivateIpAddressCount?: int,
     *     SubnetId?: string,
     *     NetworkCardIndex?: int,
     *     Ipv4Prefixes?: list<Ipv4PrefixSpecificationResponse>,
     *     Ipv4PrefixCount?: int,
     *     Ipv6Prefixes?: list<Ipv6PrefixSpecificationResponse>,
     *     Ipv6PrefixCount?: int,
     *     PrimaryIpv6?: bool,
     *     EnaSrdSpecification?: LaunchTemplateEnaSrdSpecification,
     *     ConnectionTrackingSpecification?: ConnectionTrackingSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
