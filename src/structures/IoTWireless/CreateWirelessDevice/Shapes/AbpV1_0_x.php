<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DevAddr
 * @property SessionKeysAbpV1_0_x $SessionKeys
 * @property int $FCntStart
 */
class AbpV1_0_x extends Shape
{
    /**
     * @param array{
     *     DevAddr?: string,
     *     SessionKeys?: SessionKeysAbpV1_0_x,
     *     FCntStart?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
