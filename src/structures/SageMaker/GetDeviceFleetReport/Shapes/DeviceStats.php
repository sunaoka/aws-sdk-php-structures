<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetDeviceFleetReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ConnectedDeviceCount
 * @property int $RegisteredDeviceCount
 */
class DeviceStats extends Shape
{
    /**
     * @param array{
     *     ConnectedDeviceCount: int,
     *     RegisteredDeviceCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
