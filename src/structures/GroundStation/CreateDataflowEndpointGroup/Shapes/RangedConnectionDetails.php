<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1400, 1500> $mtu
 * @property RangedSocketAddress $socketAddress
 */
class RangedConnectionDetails extends Shape
{
    /**
     * @param array{
     *     mtu?: int<1400, 1500>,
     *     socketAddress: RangedSocketAddress
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
