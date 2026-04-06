<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectionDetails $ingressAddressAndPort
 * @property RangedConnectionDetails $agentIpAndPortAddress
 */
class UplinkConnectionDetails extends Shape
{
    /**
     * @param array{
     *     ingressAddressAndPort: ConnectionDetails,
     *     agentIpAndPortAddress: RangedConnectionDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
