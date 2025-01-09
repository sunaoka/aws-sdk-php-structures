<?php

namespace Sunaoka\Aws\Structures\Ec2\RunScheduledInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AssociatePublicIpAddress
 * @property bool $DeleteOnTermination
 * @property string $Description
 * @property int $DeviceIndex
 * @property list<string> $Groups
 * @property int $Ipv6AddressCount
 * @property list<ScheduledInstancesIpv6Address> $Ipv6Addresses
 * @property string $NetworkInterfaceId
 * @property string $PrivateIpAddress
 * @property list<ScheduledInstancesPrivateIpAddressConfig> $PrivateIpAddressConfigs
 * @property int $SecondaryPrivateIpAddressCount
 * @property string $SubnetId
 */
class ScheduledInstancesNetworkInterface extends Shape
{
    /**
     * @param array{
     *     AssociatePublicIpAddress?: bool,
     *     DeleteOnTermination?: bool,
     *     Description?: string,
     *     DeviceIndex?: int,
     *     Groups?: list<string>,
     *     Ipv6AddressCount?: int,
     *     Ipv6Addresses?: list<ScheduledInstancesIpv6Address>,
     *     NetworkInterfaceId?: string,
     *     PrivateIpAddress?: string,
     *     PrivateIpAddressConfigs?: list<ScheduledInstancesPrivateIpAddressConfig>,
     *     SecondaryPrivateIpAddressCount?: int,
     *     SubnetId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
