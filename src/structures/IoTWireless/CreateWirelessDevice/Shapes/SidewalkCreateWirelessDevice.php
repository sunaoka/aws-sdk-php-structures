<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceProfileId
 * @property SidewalkPositioning|null $Positioning
 * @property string|null $SidewalkManufacturingSn
 */
class SidewalkCreateWirelessDevice extends Shape
{
    /**
     * @param array{
     *     DeviceProfileId?: string|null,
     *     Positioning?: SidewalkPositioning|null,
     *     SidewalkManufacturingSn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
