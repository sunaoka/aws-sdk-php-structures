<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateLogLevelsByResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LoRaWAN' $Type
 * @property 'INFO'|'ERROR'|'DISABLED' $LogLevel
 * @property list<WirelessGatewayEventLogOption>|null $Events
 */
class WirelessGatewayLogOption extends Shape
{
    /**
     * @param array{
     *     Type: 'LoRaWAN',
     *     LogLevel: 'INFO'|'ERROR'|'DISABLED',
     *     Events?: list<WirelessGatewayEventLogOption>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
