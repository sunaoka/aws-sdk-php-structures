<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppKey
 * @property string|null $AppEui
 * @property string|null $JoinEui
 * @property string|null $GenAppKey
 */
class OtaaV1_0_x extends Shape
{
    /**
     * @param array{
     *     AppKey?: string|null,
     *     AppEui?: string|null,
     *     JoinEui?: string|null,
     *     GenAppKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
