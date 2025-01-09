<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceProfileId
 */
class SidewalkCreateWirelessDevice extends Shape
{
    /**
     * @param array{DeviceProfileId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
