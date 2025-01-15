<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DevAddr
 * @property SessionKeysAbpV1_1|null $SessionKeys
 * @property int<0, 65535>|null $FCntStart
 */
class AbpV1_1 extends Shape
{
    /**
     * @param array{
     *     DevAddr?: string|null,
     *     SessionKeys?: SessionKeysAbpV1_1|null,
     *     FCntStart?: int<0, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
