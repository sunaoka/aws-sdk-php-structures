<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DevAddr
 * @property SessionKeysAbpV1_1 $SessionKeys
 * @property int<0, 65535> $FCntStart
 */
class AbpV1_1 extends Shape
{
    /**
     * @param array{
     *     DevAddr?: string,
     *     SessionKeys?: SessionKeysAbpV1_1,
     *     FCntStart?: int<0, 65535>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
