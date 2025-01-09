<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateResourceEventConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SidewalkEventNotificationConfigurations $Sidewalk
 * @property 'Enabled'|'Disabled' $WirelessDeviceIdEventTopic
 */
class ProximityEventConfiguration extends Shape
{
    /**
     * @param array{
     *     Sidewalk?: SidewalkEventNotificationConfigurations,
     *     WirelessDeviceIdEventTopic?: 'Enabled'|'Disabled'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
