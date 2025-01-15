<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppKey
 * @property string|null $NwkKey
 * @property string|null $JoinEui
 */
class OtaaV1_1 extends Shape
{
    /**
     * @param array{
     *     AppKey?: string|null,
     *     NwkKey?: string|null,
     *     JoinEui?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
