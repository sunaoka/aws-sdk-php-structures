<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535>|null $FCntStart
 */
class UpdateAbpV1_0_x extends Shape
{
    /**
     * @param array{FCntStart?: int<0, 65535>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
