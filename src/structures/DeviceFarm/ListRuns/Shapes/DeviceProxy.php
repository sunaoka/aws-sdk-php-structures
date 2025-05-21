<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $host
 * @property int<1, 65535> $port
 */
class DeviceProxy extends Shape
{
    /**
     * @param array{
     *     host: string,
     *     port: int<1, 65535>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
