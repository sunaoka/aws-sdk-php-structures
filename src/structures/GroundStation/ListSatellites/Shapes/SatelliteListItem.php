<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListSatellites\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $satelliteId
 * @property string|null $satelliteArn
 * @property int<0, 99999>|null $noradSatelliteID
 * @property list<string>|null $groundStations
 * @property EphemerisMetaData|null $currentEphemeris
 */
class SatelliteListItem extends Shape
{
    /**
     * @param array{
     *     satelliteId?: string|null,
     *     satelliteArn?: string|null,
     *     noradSatelliteID?: int<0, 99999>|null,
     *     groundStations?: list<string>|null,
     *     currentEphemeris?: EphemerisMetaData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
