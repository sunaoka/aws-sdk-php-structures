<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RangedSocketAddress $socketAddress
 * @property int<1400, 1500>|null $mtu
 */
class RangedConnectionDetails extends Shape
{
    /**
     * @param array{
     *     socketAddress: RangedSocketAddress,
     *     mtu?: int<1400, 1500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
