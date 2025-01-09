<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchNearby\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Offset
 * @property int $OffsetSeconds
 */
class TimeZone extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Offset?: string,
     *     OffsetSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
