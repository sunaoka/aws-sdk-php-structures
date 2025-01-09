<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetEventConfigurationByResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $WirelessGatewayEventTopic
 */
class LoRaWANConnectionStatusResourceTypeEventConfiguration extends Shape
{
    /**
     * @param array{WirelessGatewayEventTopic?: 'Enabled'|'Disabled'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
