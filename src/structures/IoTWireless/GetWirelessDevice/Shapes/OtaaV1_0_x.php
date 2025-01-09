<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppKey
 * @property string $AppEui
 * @property string $JoinEui
 * @property string $GenAppKey
 */
class OtaaV1_0_x extends Shape
{
    /**
     * @param array{
     *     AppKey?: string,
     *     AppEui?: string,
     *     JoinEui?: string,
     *     GenAppKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
