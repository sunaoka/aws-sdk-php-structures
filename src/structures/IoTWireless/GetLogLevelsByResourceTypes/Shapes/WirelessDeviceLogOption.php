<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetLogLevelsByResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Sidewalk'|'LoRaWAN' $Type
 * @property 'INFO'|'ERROR'|'DISABLED' $LogLevel
 * @property list<WirelessDeviceEventLogOption> $Events
 */
class WirelessDeviceLogOption extends Shape
{
    /**
     * @param array{
     *     Type: 'Sidewalk'|'LoRaWAN',
     *     LogLevel: 'INFO'|'ERROR'|'DISABLED',
     *     Events?: list<WirelessDeviceEventLogOption>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
