<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SidewalkPositioning|null $Positioning
 */
class SidewalkUpdateWirelessDevice extends Shape
{
    /**
     * @param array{Positioning?: SidewalkPositioning|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
