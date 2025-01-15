<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListGroundStations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $groundStationId
 * @property string|null $groundStationName
 * @property string|null $region
 */
class GroundStationData extends Shape
{
    /**
     * @param array{
     *     groundStationId?: string|null,
     *     groundStationName?: string|null,
     *     region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
