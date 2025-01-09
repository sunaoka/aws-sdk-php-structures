<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DevAddr
 * @property SessionKeysAbpV1_1 $SessionKeys
 * @property int $FCntStart
 */
class AbpV1_1 extends Shape
{
    /**
     * @param array{
     *     DevAddr?: string,
     *     SessionKeys?: SessionKeysAbpV1_1,
     *     FCntStart?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
