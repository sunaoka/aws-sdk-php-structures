<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListOrders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $trackingNumber
 */
class TrackingInformation extends Shape
{
    /**
     * @param array{trackingNumber?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
