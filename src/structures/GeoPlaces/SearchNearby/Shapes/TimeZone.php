<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchNearby\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Offset
 * @property int<0, max> $OffsetSeconds
 */
class TimeZone extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Offset?: string,
     *     OffsetSeconds?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
