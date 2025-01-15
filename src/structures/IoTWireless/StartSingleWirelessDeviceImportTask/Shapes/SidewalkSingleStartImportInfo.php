<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartSingleWirelessDeviceImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SidewalkManufacturingSn
 */
class SidewalkSingleStartImportInfo extends Shape
{
    /**
     * @param array{SidewalkManufacturingSn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
