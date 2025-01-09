<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkInsightsAccessScopeContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SourceAddresses
 * @property list<string> $DestinationAddresses
 * @property list<string> $SourcePorts
 * @property list<string> $DestinationPorts
 * @property list<string> $SourcePrefixLists
 * @property list<string> $DestinationPrefixLists
 * @property list<'tcp'|'udp'> $Protocols
 */
class PacketHeaderStatement extends Shape
{
    /**
     * @param array{
     *     SourceAddresses?: list<string>,
     *     DestinationAddresses?: list<string>,
     *     SourcePorts?: list<string>,
     *     DestinationPorts?: list<string>,
     *     SourcePrefixLists?: list<string>,
     *     DestinationPrefixLists?: list<string>,
     *     Protocols?: list<'tcp'|'udp'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
