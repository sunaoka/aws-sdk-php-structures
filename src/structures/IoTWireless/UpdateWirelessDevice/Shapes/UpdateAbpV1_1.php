<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535> $FCntStart
 */
class UpdateAbpV1_1 extends Shape
{
    /**
     * @param array{FCntStart?: int<0, 65535>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
