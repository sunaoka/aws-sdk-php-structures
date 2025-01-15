<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListSatellites\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EphemerisMetaData|null $currentEphemeris
 * @property list<string>|null $groundStations
 * @property int<0, 99999>|null $noradSatelliteID
 * @property string|null $satelliteArn
 * @property string|null $satelliteId
 */
class SatelliteListItem extends Shape
{
    /**
     * @param array{
     *     currentEphemeris?: EphemerisMetaData|null,
     *     groundStations?: list<string>|null,
     *     noradSatelliteID?: int<0, 99999>|null,
     *     satelliteArn?: string|null,
     *     satelliteId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
