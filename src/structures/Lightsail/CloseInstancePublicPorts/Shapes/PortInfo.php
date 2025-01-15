<?php

namespace Sunaoka\Aws\Structures\Lightsail\CloseInstancePublicPorts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-1, 65535>|null $fromPort
 * @property int<-1, 65535>|null $toPort
 * @property 'tcp'|'all'|'udp'|'icmp'|'icmpv6'|null $protocol
 * @property list<string>|null $cidrs
 * @property list<string>|null $ipv6Cidrs
 * @property list<string>|null $cidrListAliases
 */
class PortInfo extends Shape
{
    /**
     * @param array{
     *     fromPort?: int<-1, 65535>|null,
     *     toPort?: int<-1, 65535>|null,
     *     protocol?: 'tcp'|'all'|'udp'|'icmp'|'icmpv6'|null,
     *     cidrs?: list<string>|null,
     *     ipv6Cidrs?: list<string>|null,
     *     cidrListAliases?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
