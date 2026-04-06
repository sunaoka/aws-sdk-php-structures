<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchNearby\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OpenTime
 * @property string|null $OpenDuration
 * @property string|null $Recurrence
 */
class OpeningHoursComponents extends Shape
{
    /**
     * @param array{
     *     OpenTime?: string|null,
     *     OpenDuration?: string|null,
     *     Recurrence?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
