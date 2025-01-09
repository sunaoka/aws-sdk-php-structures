<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-1, 65535> $fromPort
 * @property int<-1, 65535> $toPort
 * @property 'tcp'|'all'|'udp'|'icmp'|'icmpv6' $protocol
 * @property string $accessFrom
 * @property 'Public'|'Private' $accessType
 * @property string $commonName
 * @property 'inbound'|'outbound' $accessDirection
 * @property list<string> $cidrs
 * @property list<string> $ipv6Cidrs
 * @property list<string> $cidrListAliases
 */
class InstancePortInfo extends Shape
{
    /**
     * @param array{
     *     fromPort?: int<-1, 65535>,
     *     toPort?: int<-1, 65535>,
     *     protocol?: 'tcp'|'all'|'udp'|'icmp'|'icmpv6',
     *     accessFrom?: string,
     *     accessType?: 'Public'|'Private',
     *     commonName?: string,
     *     accessDirection?: 'inbound'|'outbound',
     *     cidrs?: list<string>,
     *     ipv6Cidrs?: list<string>,
     *     cidrListAliases?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
