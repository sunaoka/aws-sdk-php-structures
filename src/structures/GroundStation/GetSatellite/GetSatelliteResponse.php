<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetSatellite;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\EphemerisMetaData $currentEphemeris
 * @property list<string> $groundStations
 * @property int $noradSatelliteID
 * @property string $satelliteArn
 * @property string $satelliteId
 */
class GetSatelliteResponse extends Response
{
}
