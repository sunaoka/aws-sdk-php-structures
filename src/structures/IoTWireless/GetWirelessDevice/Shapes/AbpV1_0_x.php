<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DevAddr
 * @property SessionKeysAbpV1_0_x|null $SessionKeys
 * @property int<0, 65535>|null $FCntStart
 */
class AbpV1_0_x extends Shape
{
    /**
     * @param array{
     *     DevAddr?: string|null,
     *     SessionKeys?: SessionKeysAbpV1_0_x|null,
     *     FCntStart?: int<0, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
