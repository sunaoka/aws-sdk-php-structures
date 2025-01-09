<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListEventConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoRaWANConnectionStatusEventNotificationConfigurations $LoRaWAN
 * @property 'Enabled'|'Disabled' $WirelessGatewayIdEventTopic
 */
class ConnectionStatusEventConfiguration extends Shape
{
    /**
     * @param array{
     *     LoRaWAN?: LoRaWANConnectionStatusEventNotificationConfigurations,
     *     WirelessGatewayIdEventTopic?: 'Enabled'|'Disabled'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
