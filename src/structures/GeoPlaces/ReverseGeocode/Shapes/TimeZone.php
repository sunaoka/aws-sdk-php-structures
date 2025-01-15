<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\ReverseGeocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Offset
 * @property int<0, max>|null $OffsetSeconds
 */
class TimeZone extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Offset?: string|null,
     *     OffsetSeconds?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
