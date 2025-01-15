<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NwkSKey
 * @property string|null $AppSKey
 */
class SessionKeysAbpV1_0_x extends Shape
{
    /**
     * @param array{
     *     NwkSKey?: string|null,
     *     AppSKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
