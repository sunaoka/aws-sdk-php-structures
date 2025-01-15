<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetFuotaTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RfRegion
 * @property \Aws\Api\DateTimeResult|null $StartTime
 */
class LoRaWANFuotaTaskGetInfo extends Shape
{
    /**
     * @param array{
     *     RfRegion?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
