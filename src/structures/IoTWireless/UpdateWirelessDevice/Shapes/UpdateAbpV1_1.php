<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FCntStart
 */
class UpdateAbpV1_1 extends Shape
{
    /**
     * @param array{FCntStart?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
