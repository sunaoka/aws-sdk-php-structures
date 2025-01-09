<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetFuotaTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RfRegion
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class LoRaWANFuotaTaskGetInfo extends Shape
{
    /**
     * @param array{
     *     RfRegion?: string,
     *     StartTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
