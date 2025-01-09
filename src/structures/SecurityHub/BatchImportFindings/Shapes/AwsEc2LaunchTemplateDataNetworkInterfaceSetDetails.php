<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AssociateCarrierIpAddress
 * @property bool $AssociatePublicIpAddress
 * @property bool $DeleteOnTermination
 * @property string $Description
 * @property int $DeviceIndex
 * @property list<string> $Groups
 * @property string $InterfaceType
 * @property int $Ipv4PrefixCount
 * @property list<AwsEc2LaunchTemplateDataNetworkInterfaceSetIpv4PrefixesDetails> $Ipv4Prefixes
 * @property int $Ipv6AddressCount
 * @property list<AwsEc2LaunchTemplateDataNetworkInterfaceSetIpv6AddressesDetails> $Ipv6Addresses
 * @property int $Ipv6PrefixCount
 * @property list<AwsEc2LaunchTemplateDataNetworkInterfaceSetIpv6PrefixesDetails> $Ipv6Prefixes
 * @property int $NetworkCardIndex
 * @property string $NetworkInterfaceId
 * @property string $PrivateIpAddress
 * @property list<AwsEc2LaunchTemplateDataNetworkInterfaceSetPrivateIpAddressesDetails> $PrivateIpAddresses
 * @property int $SecondaryPrivateIpAddressCount
 * @property string $SubnetId
 */
class AwsEc2LaunchTemplateDataNetworkInterfaceSetDetails extends Shape
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
     *     Ipv4PrefixCount?: int,
     *     Ipv4Prefixes?: list<AwsEc2LaunchTemplateDataNetworkInterfaceSetIpv4PrefixesDetails>,
     *     Ipv6AddressCount?: int,
     *     Ipv6Addresses?: list<AwsEc2LaunchTemplateDataNetworkInterfaceSetIpv6AddressesDetails>,
     *     Ipv6PrefixCount?: int,
     *     Ipv6Prefixes?: list<AwsEc2LaunchTemplateDataNetworkInterfaceSetIpv6PrefixesDetails>,
     *     NetworkCardIndex?: int,
     *     NetworkInterfaceId?: string,
     *     PrivateIpAddress?: string,
     *     PrivateIpAddresses?: list<AwsEc2LaunchTemplateDataNetworkInterfaceSetPrivateIpAddressesDetails>,
     *     SecondaryPrivateIpAddressCount?: int,
     *     SubnetId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
