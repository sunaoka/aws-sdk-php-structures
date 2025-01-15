<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetResourceEventConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled'|null $DevEuiEventTopic
 */
class LoRaWANJoinEventNotificationConfigurations extends Shape
{
    /**
     * @param array{DevEuiEventTopic?: 'Enabled'|'Disabled'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
