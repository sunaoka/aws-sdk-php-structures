<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Address>|null $Sources
 * @property list<Address>|null $Destinations
 * @property list<PortRange>|null $SourcePorts
 * @property list<PortRange>|null $DestinationPorts
 * @property list<int<0, 255>>|null $Protocols
 * @property list<TCPFlagField>|null $TCPFlags
 */
class MatchAttributes extends Shape
{
    /**
     * @param array{
     *     Sources?: list<Address>|null,
     *     Destinations?: list<Address>|null,
     *     SourcePorts?: list<PortRange>|null,
     *     DestinationPorts?: list<PortRange>|null,
     *     Protocols?: list<int<0, 255>>|null,
     *     TCPFlags?: list<TCPFlagField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
