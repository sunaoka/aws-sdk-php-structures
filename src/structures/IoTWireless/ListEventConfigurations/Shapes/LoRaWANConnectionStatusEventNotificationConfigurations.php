<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListEventConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $GatewayEuiEventTopic
 */
class LoRaWANConnectionStatusEventNotificationConfigurations extends Shape
{
    /**
     * @param array{GatewayEuiEventTopic?: 'Enabled'|'Disabled'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
