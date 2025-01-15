<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetEventConfigurationByResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled'|null $WirelessDeviceEventTopic
 */
class LoRaWANJoinResourceTypeEventConfiguration extends Shape
{
    /**
     * @param array{WirelessDeviceEventTopic?: 'Enabled'|'Disabled'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
