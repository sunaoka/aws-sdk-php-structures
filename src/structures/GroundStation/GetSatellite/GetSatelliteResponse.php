<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetSatellite;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $satelliteId
 * @property string|null $satelliteArn
 * @property int<0, 99999>|null $noradSatelliteID
 * @property list<string>|null $groundStations
 * @property Shapes\EphemerisMetaData|null $currentEphemeris
 */
class GetSatelliteResponse extends Response
{
}
