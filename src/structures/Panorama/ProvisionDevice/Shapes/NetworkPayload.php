<?php

namespace Sunaoka\Aws\Structures\Panorama\ProvisionDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EthernetPayload|null $Ethernet0
 * @property EthernetPayload|null $Ethernet1
 * @property NtpPayload|null $Ntp
 */
class NetworkPayload extends Shape
{
    /**
     * @param array{
     *     Ethernet0?: EthernetPayload|null,
     *     Ethernet1?: EthernetPayload|null,
     *     Ntp?: NtpPayload|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
