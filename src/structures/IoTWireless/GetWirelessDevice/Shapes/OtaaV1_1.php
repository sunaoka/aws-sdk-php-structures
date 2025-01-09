<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppKey
 * @property string $NwkKey
 * @property string $JoinEui
 */
class OtaaV1_1 extends Shape
{
    /**
     * @param array{
     *     AppKey?: string,
     *     NwkKey?: string,
     *     JoinEui?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
