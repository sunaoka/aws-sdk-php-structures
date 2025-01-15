<?php

namespace Sunaoka\Aws\Structures\SnowBall\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WirelessConnection|null $WirelessConnection
 */
class SnowconeDeviceConfiguration extends Shape
{
    /**
     * @param array{WirelessConnection?: WirelessConnection|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
