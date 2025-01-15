<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetEventConfigurationByResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoRaWANJoinResourceTypeEventConfiguration|null $LoRaWAN
 */
class JoinResourceTypeEventConfiguration extends Shape
{
    /**
     * @param array{LoRaWAN?: LoRaWANJoinResourceTypeEventConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
