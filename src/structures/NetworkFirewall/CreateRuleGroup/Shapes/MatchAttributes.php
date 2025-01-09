<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Address> $Sources
 * @property list<Address> $Destinations
 * @property list<PortRange> $SourcePorts
 * @property list<PortRange> $DestinationPorts
 * @property list<int> $Protocols
 * @property list<TCPFlagField> $TCPFlags
 */
class MatchAttributes extends Shape
{
    /**
     * @param array{
     *     Sources?: list<Address>,
     *     Destinations?: list<Address>,
     *     SourcePorts?: list<PortRange>,
     *     DestinationPorts?: list<PortRange>,
     *     Protocols?: list<int>,
     *     TCPFlags?: list<TCPFlagField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
