<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstancePortStates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $fromPort
 * @property int $toPort
 * @property 'tcp'|'all'|'udp'|'icmp'|'icmpv6' $protocol
 * @property 'open'|'closed' $state
 * @property list<string> $cidrs
 * @property list<string> $ipv6Cidrs
 * @property list<string> $cidrListAliases
 */
class InstancePortState extends Shape
{
    /**
     * @param array{
     *     fromPort?: int,
     *     toPort?: int,
     *     protocol?: 'tcp'|'all'|'udp'|'icmp'|'icmpv6',
     *     state?: 'open'|'closed',
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
