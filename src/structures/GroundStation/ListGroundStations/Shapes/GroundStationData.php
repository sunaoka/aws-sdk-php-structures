<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListGroundStations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groundStationId
 * @property string $groundStationName
 * @property string $region
 */
class GroundStationData extends Shape
{
    /**
     * @param array{
     *     groundStationId?: string,
     *     groundStationName?: string,
     *     region?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
