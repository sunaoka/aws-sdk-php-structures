<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RangedConnectionDetails $agentIpAndPortAddress
 * @property ConnectionDetails $egressAddressAndPort
 */
class DownlinkConnectionDetails extends Shape
{
    /**
     * @param array{
     *     agentIpAndPortAddress: RangedConnectionDetails,
     *     egressAddressAndPort: ConnectionDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
