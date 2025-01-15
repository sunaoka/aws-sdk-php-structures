<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetResourceEventConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled'|null $GatewayEuiEventTopic
 */
class LoRaWANConnectionStatusEventNotificationConfigurations extends Shape
{
    /**
     * @param array{GatewayEuiEventTopic?: 'Enabled'|'Disabled'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
