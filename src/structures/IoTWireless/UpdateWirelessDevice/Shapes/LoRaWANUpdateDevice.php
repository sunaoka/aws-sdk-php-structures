<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceProfileId
 * @property string|null $ServiceProfileId
 * @property UpdateAbpV1_1|null $AbpV1_1
 * @property UpdateAbpV1_0_x|null $AbpV1_0_x
 * @property UpdateFPorts|null $FPorts
 */
class LoRaWANUpdateDevice extends Shape
{
    /**
     * @param array{
     *     DeviceProfileId?: string|null,
     *     ServiceProfileId?: string|null,
     *     AbpV1_1?: UpdateAbpV1_1|null,
     *     AbpV1_0_x?: UpdateAbpV1_0_x|null,
     *     FPorts?: UpdateFPorts|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
