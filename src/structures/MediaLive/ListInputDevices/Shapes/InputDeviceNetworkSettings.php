<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $DnsAddresses
 * @property string|null $Gateway
 * @property string|null $IpAddress
 * @property 'STATIC'|'DHCP'|null $IpScheme
 * @property string|null $SubnetMask
 */
class InputDeviceNetworkSettings extends Shape
{
    /**
     * @param array{
     *     DnsAddresses?: list<string>|null,
     *     Gateway?: string|null,
     *     IpAddress?: string|null,
     *     IpScheme?: 'STATIC'|'DHCP'|null,
     *     SubnetMask?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
