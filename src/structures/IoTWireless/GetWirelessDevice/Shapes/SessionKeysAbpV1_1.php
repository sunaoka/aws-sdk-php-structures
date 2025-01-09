<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FNwkSIntKey
 * @property string $SNwkSIntKey
 * @property string $NwkSEncKey
 * @property string $AppSKey
 */
class SessionKeysAbpV1_1 extends Shape
{
    /**
     * @param array{
     *     FNwkSIntKey?: string,
     *     SNwkSIntKey?: string,
     *     NwkSEncKey?: string,
     *     AppSKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
