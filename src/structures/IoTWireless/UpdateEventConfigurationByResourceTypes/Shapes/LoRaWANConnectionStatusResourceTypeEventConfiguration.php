<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateEventConfigurationByResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled'|null $WirelessGatewayEventTopic
 */
class LoRaWANConnectionStatusResourceTypeEventConfiguration extends Shape
{
    /**
     * @param array{WirelessGatewayEventTopic?: 'Enabled'|'Disabled'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
