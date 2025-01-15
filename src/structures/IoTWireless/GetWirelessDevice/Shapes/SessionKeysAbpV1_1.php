<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FNwkSIntKey
 * @property string|null $SNwkSIntKey
 * @property string|null $NwkSEncKey
 * @property string|null $AppSKey
 */
class SessionKeysAbpV1_1 extends Shape
{
    /**
     * @param array{
     *     FNwkSIntKey?: string|null,
     *     SNwkSIntKey?: string|null,
     *     NwkSEncKey?: string|null,
     *     AppSKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
