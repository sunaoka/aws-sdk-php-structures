<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListEventConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled'|null $AmazonIdEventTopic
 */
class SidewalkEventNotificationConfigurations extends Shape
{
    /**
     * @param array{AmazonIdEventTopic?: 'Enabled'|'Disabled'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
