<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 223> $FPort
 * @property 'SemtechGeolocation' $Type
 * @property string $DestinationName
 */
class ApplicationConfig extends Shape
{
    /**
     * @param array{
     *     FPort?: int<1, 223>,
     *     Type?: 'SemtechGeolocation',
     *     DestinationName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
