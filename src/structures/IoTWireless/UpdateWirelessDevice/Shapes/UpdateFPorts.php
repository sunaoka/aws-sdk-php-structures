<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Positioning $Positioning
 * @property list<ApplicationConfig> $Applications
 */
class UpdateFPorts extends Shape
{
    /**
     * @param array{
     *     Positioning?: Positioning,
     *     Applications?: list<ApplicationConfig>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
