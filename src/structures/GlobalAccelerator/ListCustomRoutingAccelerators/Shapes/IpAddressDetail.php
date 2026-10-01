<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingAccelerators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpAddress
 * @property string|null $NetworkZone
 */
class IpAddressDetail extends Shape
{
    /**
     * @param array{
     *     IpAddress?: string|null,
     *     NetworkZone?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
