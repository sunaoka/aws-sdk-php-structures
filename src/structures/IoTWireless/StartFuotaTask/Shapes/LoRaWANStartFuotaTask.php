<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartFuotaTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class LoRaWANStartFuotaTask extends Shape
{
    /**
     * @param array{StartTime?: \Aws\Api\DateTimeResult} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
