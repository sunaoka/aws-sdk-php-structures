<?php

namespace Sunaoka\Aws\Structures\SnowBall\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SnowconeDeviceConfiguration|null $SnowconeDeviceConfiguration
 */
class DeviceConfiguration extends Shape
{
    /**
     * @param array{SnowconeDeviceConfiguration?: SnowconeDeviceConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
