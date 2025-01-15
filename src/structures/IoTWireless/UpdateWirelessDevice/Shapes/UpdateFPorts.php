<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Positioning|null $Positioning
 * @property list<ApplicationConfig>|null $Applications
 */
class UpdateFPorts extends Shape
{
    /**
     * @param array{
     *     Positioning?: Positioning|null,
     *     Applications?: list<ApplicationConfig>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
