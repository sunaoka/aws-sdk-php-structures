<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListSatellites\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EphemerisMetaData $currentEphemeris
 * @property list<string> $groundStations
 * @property int<0, 99999> $noradSatelliteID
 * @property string $satelliteArn
 * @property string $satelliteId
 */
class SatelliteListItem extends Shape
{
    /**
     * @param array{
     *     currentEphemeris?: EphemerisMetaData,
     *     groundStations?: list<string>,
     *     noradSatelliteID?: int<0, 99999>,
     *     satelliteArn?: string,
     *     satelliteId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
