<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EthernetPayload $Ethernet0
 * @property EthernetPayload $Ethernet1
 * @property NtpPayload $Ntp
 */
class NetworkPayload extends Shape
{
    /**
     * @param array{
     *     Ethernet0?: EthernetPayload,
     *     Ethernet1?: EthernetPayload,
     *     Ntp?: NtpPayload
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
