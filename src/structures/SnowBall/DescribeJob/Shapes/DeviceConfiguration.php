<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SnowconeDeviceConfiguration $SnowconeDeviceConfiguration
 */
class DeviceConfiguration extends Shape
{
    /**
     * @param array{SnowconeDeviceConfiguration?: SnowconeDeviceConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
