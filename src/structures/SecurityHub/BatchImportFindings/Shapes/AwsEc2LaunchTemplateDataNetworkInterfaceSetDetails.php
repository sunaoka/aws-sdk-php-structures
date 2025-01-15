<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AssociateCarrierIpAddress
 * @property bool|null $AssociatePublicIpAddress
 * @property bool|null $DeleteOnTermination
 * @property string|null $Description
 * @property int|null $DeviceIndex
 * @property list<string>|null $Groups
 * @property string|null $InterfaceType
 * @property int|null $Ipv4PrefixCount
 * @property list<AwsEc2LaunchTemplateDataNetworkInterfaceSetIpv4PrefixesDetails>|null $Ipv4Prefixes
 * @property int|null $Ipv6AddressCount
 * @property list<AwsEc2LaunchTemplateDataNetworkInterfaceSetIpv6AddressesDetails>|null $Ipv6Addresses
 * @property int|null $Ipv6PrefixCount
 * @property list<AwsEc2LaunchTemplateDataNetworkInterfaceSetIpv6PrefixesDetails>|null $Ipv6Prefixes
 * @property int|null $NetworkCardIndex
 * @property string|null $NetworkInterfaceId
 * @property string|null $PrivateIpAddress
 * @property list<AwsEc2LaunchTemplateDataNetworkInterfaceSetPrivateIpAddressesDetails>|null $PrivateIpAddresses
 * @property int|null $SecondaryPrivateIpAddressCount
 * @property string|null $SubnetId
 */
class AwsEc2LaunchTemplateDataNetworkInterfaceSetDetails extends Shape
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
     *     Ipv4PrefixCount?: int|null,
     *     Ipv4Prefixes?: list<AwsEc2LaunchTemplateDataNetworkInterfaceSetIpv4PrefixesDetails>|null,
     *     Ipv6AddressCount?: int|null,
     *     Ipv6Addresses?: list<AwsEc2LaunchTemplateDataNetworkInterfaceSetIpv6AddressesDetails>|null,
     *     Ipv6PrefixCount?: int|null,
     *     Ipv6Prefixes?: list<AwsEc2LaunchTemplateDataNetworkInterfaceSetIpv6PrefixesDetails>|null,
     *     NetworkCardIndex?: int|null,
     *     NetworkInterfaceId?: string|null,
     *     PrivateIpAddress?: string|null,
     *     PrivateIpAddresses?: list<AwsEc2LaunchTemplateDataNetworkInterfaceSetPrivateIpAddressesDetails>|null,
     *     SecondaryPrivateIpAddressCount?: int|null,
     *     SubnetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
