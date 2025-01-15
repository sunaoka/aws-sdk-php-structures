<?php

namespace Sunaoka\Aws\Structures\Ec2\RunScheduledInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AssociatePublicIpAddress
 * @property bool|null $DeleteOnTermination
 * @property string|null $Description
 * @property int|null $DeviceIndex
 * @property list<string>|null $Groups
 * @property int|null $Ipv6AddressCount
 * @property list<ScheduledInstancesIpv6Address>|null $Ipv6Addresses
 * @property string|null $NetworkInterfaceId
 * @property string|null $PrivateIpAddress
 * @property list<ScheduledInstancesPrivateIpAddressConfig>|null $PrivateIpAddressConfigs
 * @property int|null $SecondaryPrivateIpAddressCount
 * @property string|null $SubnetId
 */
class ScheduledInstancesNetworkInterface extends Shape
{
    /**
     * @param array{
     *     AssociatePublicIpAddress?: bool|null,
     *     DeleteOnTermination?: bool|null,
     *     Description?: string|null,
     *     DeviceIndex?: int|null,
     *     Groups?: list<string>|null,
     *     Ipv6AddressCount?: int|null,
     *     Ipv6Addresses?: list<ScheduledInstancesIpv6Address>|null,
     *     NetworkInterfaceId?: string|null,
     *     PrivateIpAddress?: string|null,
     *     PrivateIpAddressConfigs?: list<ScheduledInstancesPrivateIpAddressConfig>|null,
     *     SecondaryPrivateIpAddressCount?: int|null,
     *     SubnetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
