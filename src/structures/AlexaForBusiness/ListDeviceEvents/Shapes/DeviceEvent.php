<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListDeviceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONNECTION_STATUS'|'DEVICE_STATUS'|null $Type
 * @property string|null $Value
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 */
class DeviceEvent extends Shape
{
    /**
     * @param array{
     *     Type?: 'CONNECTION_STATUS'|'DEVICE_STATUS'|null,
     *     Value?: string|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
