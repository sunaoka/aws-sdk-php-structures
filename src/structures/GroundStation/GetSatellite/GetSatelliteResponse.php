<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetSatellite;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\EphemerisMetaData|null $currentEphemeris
 * @property list<string>|null $groundStations
 * @property int<0, 99999>|null $noradSatelliteID
 * @property string|null $satelliteArn
 * @property string|null $satelliteId
 */
class GetSatelliteResponse extends Response
{
}
