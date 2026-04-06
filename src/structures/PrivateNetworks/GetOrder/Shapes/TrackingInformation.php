<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\GetOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $trackingNumber
 */
class TrackingInformation extends Shape
{
    /**
     * @param array{trackingNumber?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
