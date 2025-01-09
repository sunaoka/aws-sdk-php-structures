<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateTLSInspectionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Address> $Sources
 * @property list<Address> $Destinations
 * @property list<PortRange> $SourcePorts
 * @property list<PortRange> $DestinationPorts
 * @property list<int> $Protocols
 */
class ServerCertificateScope extends Shape
{
    /**
     * @param array{
     *     Sources?: list<Address>,
     *     Destinations?: list<Address>,
     *     SourcePorts?: list<PortRange>,
     *     DestinationPorts?: list<PortRange>,
     *     Protocols?: list<int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
