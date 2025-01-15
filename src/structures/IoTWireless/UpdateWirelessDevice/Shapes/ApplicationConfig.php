<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 223>|null $FPort
 * @property 'SemtechGeolocation'|null $Type
 * @property string|null $DestinationName
 */
class ApplicationConfig extends Shape
{
    /**
     * @param array{
     *     FPort?: int<1, 223>|null,
     *     Type?: 'SemtechGeolocation'|null,
     *     DestinationName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
