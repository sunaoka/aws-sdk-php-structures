<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetLogLevelsByResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LoRaWAN' $Type
 * @property 'INFO'|'ERROR'|'DISABLED' $LogLevel
 * @property list<WirelessGatewayEventLogOption> $Events
 */
class WirelessGatewayLogOption extends Shape
{
    /**
     * @param array{
     *     Type: 'LoRaWAN',
     *     LogLevel: 'INFO'|'ERROR'|'DISABLED',
     *     Events?: list<WirelessGatewayEventLogOption>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
