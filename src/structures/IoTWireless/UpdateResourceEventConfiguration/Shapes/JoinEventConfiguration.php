<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateResourceEventConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoRaWANJoinEventNotificationConfigurations|null $LoRaWAN
 * @property 'Enabled'|'Disabled'|null $WirelessDeviceIdEventTopic
 */
class JoinEventConfiguration extends Shape
{
    /**
     * @param array{
     *     LoRaWAN?: LoRaWANJoinEventNotificationConfigurations|null,
     *     WirelessDeviceIdEventTopic?: 'Enabled'|'Disabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
