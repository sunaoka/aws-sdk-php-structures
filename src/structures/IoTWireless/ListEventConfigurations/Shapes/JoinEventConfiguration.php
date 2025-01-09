<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListEventConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoRaWANJoinEventNotificationConfigurations $LoRaWAN
 * @property 'Enabled'|'Disabled' $WirelessDeviceIdEventTopic
 */
class JoinEventConfiguration extends Shape
{
    /**
     * @param array{
     *     LoRaWAN?: LoRaWANJoinEventNotificationConfigurations,
     *     WirelessDeviceIdEventTopic?: 'Enabled'|'Disabled'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
