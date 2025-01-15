<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetEventConfigurationByResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoRaWANConnectionStatusResourceTypeEventConfiguration|null $LoRaWAN
 */
class ConnectionStatusResourceTypeEventConfiguration extends Shape
{
    /**
     * @param array{LoRaWAN?: LoRaWANConnectionStatusResourceTypeEventConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
