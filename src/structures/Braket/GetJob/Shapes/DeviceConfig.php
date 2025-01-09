<?php

namespace Sunaoka\Aws\Structures\Braket\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $device
 */
class DeviceConfig extends Shape
{
    /**
     * @param array{device: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
