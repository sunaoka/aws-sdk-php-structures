<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DevEui
 * @property string $DeviceProfileId
 * @property string $ServiceProfileId
 * @property OtaaV1_1 $OtaaV1_1
 * @property OtaaV1_0_x $OtaaV1_0_x
 * @property AbpV1_1 $AbpV1_1
 * @property AbpV1_0_x $AbpV1_0_x
 * @property FPorts $FPorts
 */
class LoRaWANDevice extends Shape
{
    /**
     * @param array{
     *     DevEui?: string,
     *     DeviceProfileId?: string,
     *     ServiceProfileId?: string,
     *     OtaaV1_1?: OtaaV1_1,
     *     OtaaV1_0_x?: OtaaV1_0_x,
     *     AbpV1_1?: AbpV1_1,
     *     AbpV1_0_x?: AbpV1_0_x,
     *     FPorts?: FPorts
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
