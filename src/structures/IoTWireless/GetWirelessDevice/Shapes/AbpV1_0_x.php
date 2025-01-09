<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DevAddr
 * @property SessionKeysAbpV1_0_x $SessionKeys
 * @property int<0, 65535> $FCntStart
 */
class AbpV1_0_x extends Shape
{
    /**
     * @param array{
     *     DevAddr?: string,
     *     SessionKeys?: SessionKeysAbpV1_0_x,
     *     FCntStart?: int<0, 65535>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
