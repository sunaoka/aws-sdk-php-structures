<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetLogLevelsByResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LoRaWAN' $Type
 * @property 'INFO'|'ERROR'|'DISABLED' $LogLevel
 * @property list<FuotaTaskEventLogOption>|null $Events
 */
class FuotaTaskLogOption extends Shape
{
    /**
     * @param array{
     *     Type: 'LoRaWAN',
     *     LogLevel: 'INFO'|'ERROR'|'DISABLED',
     *     Events?: list<FuotaTaskEventLogOption>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
