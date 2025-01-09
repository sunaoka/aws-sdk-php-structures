<?php

namespace Sunaoka\Aws\Structures\LocationService\VerifyDevicePosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MacAddress
 * @property int $Rss
 */
class WiFiAccessPoint extends Shape
{
    /**
     * @param array{
     *     MacAddress: string,
     *     Rss: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
