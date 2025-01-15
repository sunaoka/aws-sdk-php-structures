<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetEventConfigurationByResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SidewalkResourceTypeEventConfiguration|null $Sidewalk
 */
class ProximityResourceTypeEventConfiguration extends Shape
{
    /**
     * @param array{Sidewalk?: SidewalkResourceTypeEventConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
