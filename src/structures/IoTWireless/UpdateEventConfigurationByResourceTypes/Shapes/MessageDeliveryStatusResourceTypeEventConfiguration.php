<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateEventConfigurationByResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SidewalkResourceTypeEventConfiguration $Sidewalk
 */
class MessageDeliveryStatusResourceTypeEventConfiguration extends Shape
{
    /**
     * @param array{Sidewalk?: SidewalkResourceTypeEventConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
