<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<50, 99>|null $ConfidencePercent
 */
class WiFiCellular extends Shape
{
    /**
     * @param array{ConfidencePercent?: int<50, 99>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
