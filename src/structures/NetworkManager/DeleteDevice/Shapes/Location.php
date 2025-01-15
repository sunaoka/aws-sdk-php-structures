<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Address
 * @property string|null $Latitude
 * @property string|null $Longitude
 */
class Location extends Shape
{
    /**
     * @param array{
     *     Address?: string|null,
     *     Latitude?: string|null,
     *     Longitude?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
