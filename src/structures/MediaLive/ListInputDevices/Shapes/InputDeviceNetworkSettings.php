<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $DnsAddresses
 * @property string $Gateway
 * @property string $IpAddress
 * @property 'STATIC'|'DHCP' $IpScheme
 * @property string $SubnetMask
 */
class InputDeviceNetworkSettings extends Shape
{
    /**
     * @param array{
     *     DnsAddresses?: list<string>,
     *     Gateway?: string,
     *     IpAddress?: string,
     *     IpScheme?: 'STATIC'|'DHCP',
     *     SubnetMask?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
