<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetResourceEventConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoRaWANConnectionStatusEventNotificationConfigurations|null $LoRaWAN
 * @property 'Enabled'|'Disabled'|null $WirelessGatewayIdEventTopic
 */
class ConnectionStatusEventConfiguration extends Shape
{
    /**
     * @param array{
     *     LoRaWAN?: LoRaWANConnectionStatusEventNotificationConfigurations|null,
     *     WirelessGatewayIdEventTopic?: 'Enabled'|'Disabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
