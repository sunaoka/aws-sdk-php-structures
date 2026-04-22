<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WiFiCellular|null $WiFiCellular
 */
class AdvancedConfiguration extends Shape
{
    /**
     * @param array{WiFiCellular?: WiFiCellular|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
