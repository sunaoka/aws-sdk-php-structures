<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceProfileId
 * @property string $ServiceProfileId
 * @property UpdateAbpV1_1 $AbpV1_1
 * @property UpdateAbpV1_0_x $AbpV1_0_x
 * @property UpdateFPorts $FPorts
 */
class LoRaWANUpdateDevice extends Shape
{
    /**
     * @param array{
     *     DeviceProfileId?: string,
     *     ServiceProfileId?: string,
     *     AbpV1_1?: UpdateAbpV1_1,
     *     AbpV1_0_x?: UpdateAbpV1_0_x,
     *     FPorts?: UpdateFPorts
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
