<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Status
 * @property string $TrackingNumber
 */
class Shipment extends Shape
{
    /**
     * @param array{
     *     Status?: string,
     *     TrackingNumber?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
