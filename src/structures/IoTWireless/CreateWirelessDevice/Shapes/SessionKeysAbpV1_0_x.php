<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NwkSKey
 * @property string $AppSKey
 */
class SessionKeysAbpV1_0_x extends Shape
{
    /**
     * @param array{
     *     NwkSKey?: string,
     *     AppSKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
