<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateEventConfigurationByResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $WirelessDeviceEventTopic
 */
class SidewalkResourceTypeEventConfiguration extends Shape
{
    /**
     * @param array{WirelessDeviceEventTopic?: 'Enabled'|'Disabled'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
