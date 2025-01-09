<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WirelessConnection $WirelessConnection
 */
class SnowconeDeviceConfiguration extends Shape
{
    /**
     * @param array{WirelessConnection?: WirelessConnection} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
