<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetResourceEventConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SidewalkEventNotificationConfigurations|null $Sidewalk
 * @property 'Enabled'|'Disabled'|null $WirelessDeviceIdEventTopic
 */
class ProximityEventConfiguration extends Shape
{
    /**
     * @param array{
     *     Sidewalk?: SidewalkEventNotificationConfigurations|null,
     *     WirelessDeviceIdEventTopic?: 'Enabled'|'Disabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
