<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetEventConfigurationByResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoRaWANJoinResourceTypeEventConfiguration $LoRaWAN
 */
class JoinResourceTypeEventConfiguration extends Shape
{
    /**
     * @param array{LoRaWAN?: LoRaWANJoinResourceTypeEventConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
