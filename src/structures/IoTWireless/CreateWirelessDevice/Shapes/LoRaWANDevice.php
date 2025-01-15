<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DevEui
 * @property string|null $DeviceProfileId
 * @property string|null $ServiceProfileId
 * @property OtaaV1_1|null $OtaaV1_1
 * @property OtaaV1_0_x|null $OtaaV1_0_x
 * @property AbpV1_1|null $AbpV1_1
 * @property AbpV1_0_x|null $AbpV1_0_x
 * @property FPorts|null $FPorts
 */
class LoRaWANDevice extends Shape
{
    /**
     * @param array{
     *     DevEui?: string|null,
     *     DeviceProfileId?: string|null,
     *     ServiceProfileId?: string|null,
     *     OtaaV1_1?: OtaaV1_1|null,
     *     OtaaV1_0_x?: OtaaV1_0_x|null,
     *     AbpV1_1?: AbpV1_1|null,
     *     AbpV1_0_x?: AbpV1_0_x|null,
     *     FPorts?: FPorts|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
