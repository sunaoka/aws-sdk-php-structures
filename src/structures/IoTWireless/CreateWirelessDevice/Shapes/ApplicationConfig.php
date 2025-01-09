<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FPort
 * @property 'SemtechGeolocation' $Type
 * @property string $DestinationName
 */
class ApplicationConfig extends Shape
{
    /**
     * @param array{
     *     FPort?: int,
     *     Type?: 'SemtechGeolocation',
     *     DestinationName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
