<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Address
 * @property string $Latitude
 * @property string $Longitude
 */
class Location extends Shape
{
    /**
     * @param array{
     *     Address?: string,
     *     Latitude?: string,
     *     Longitude?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
