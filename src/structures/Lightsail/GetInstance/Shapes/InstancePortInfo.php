<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-1, 65535>|null $fromPort
 * @property int<-1, 65535>|null $toPort
 * @property 'tcp'|'all'|'udp'|'icmp'|'icmpv6'|null $protocol
 * @property string|null $accessFrom
 * @property 'Public'|'Private'|null $accessType
 * @property string|null $commonName
 * @property 'inbound'|'outbound'|null $accessDirection
 * @property list<string>|null $cidrs
 * @property list<string>|null $ipv6Cidrs
 * @property list<string>|null $cidrListAliases
 */
class InstancePortInfo extends Shape
{
    /**
     * @param array{
     *     fromPort?: int<-1, 65535>|null,
     *     toPort?: int<-1, 65535>|null,
     *     protocol?: 'tcp'|'all'|'udp'|'icmp'|'icmpv6'|null,
     *     accessFrom?: string|null,
     *     accessType?: 'Public'|'Private'|null,
     *     commonName?: string|null,
     *     accessDirection?: 'inbound'|'outbound'|null,
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
