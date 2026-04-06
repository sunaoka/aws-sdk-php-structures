<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartSingleWirelessDeviceImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SidewalkManufacturingSn
 * @property SidewalkPositioning|null $Positioning
 */
class SidewalkSingleStartImportInfo extends Shape
{
    /**
     * @param array{
     *     SidewalkManufacturingSn?: string|null,
     *     Positioning?: SidewalkPositioning|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
