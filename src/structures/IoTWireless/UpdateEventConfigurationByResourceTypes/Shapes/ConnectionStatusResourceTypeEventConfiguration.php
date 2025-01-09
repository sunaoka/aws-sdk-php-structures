<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateEventConfigurationByResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoRaWANConnectionStatusResourceTypeEventConfiguration $LoRaWAN
 */
class ConnectionStatusResourceTypeEventConfiguration extends Shape
{
    /**
     * @param array{LoRaWAN?: LoRaWANConnectionStatusResourceTypeEventConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
