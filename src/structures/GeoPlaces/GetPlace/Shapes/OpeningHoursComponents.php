<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\GetPlace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OpenTime
 * @property string $OpenDuration
 * @property string $Recurrence
 */
class OpeningHoursComponents extends Shape
{
    /**
     * @param array{
     *     OpenTime?: string,
     *     OpenDuration?: string,
     *     Recurrence?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
