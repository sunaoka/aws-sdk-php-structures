<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkInsightsAccessScopeContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SourceAddresses
 * @property list<string>|null $DestinationAddresses
 * @property list<string>|null $SourcePorts
 * @property list<string>|null $DestinationPorts
 * @property list<string>|null $SourcePrefixLists
 * @property list<string>|null $DestinationPrefixLists
 * @property list<'tcp'|'udp'>|null $Protocols
 */
class PacketHeaderStatement extends Shape
{
    /**
     * @param array{
     *     SourceAddresses?: list<string>|null,
     *     DestinationAddresses?: list<string>|null,
     *     SourcePorts?: list<string>|null,
     *     DestinationPorts?: list<string>|null,
     *     SourcePrefixLists?: list<string>|null,
     *     DestinationPrefixLists?: list<string>|null,
     *     Protocols?: list<'tcp'|'udp'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
