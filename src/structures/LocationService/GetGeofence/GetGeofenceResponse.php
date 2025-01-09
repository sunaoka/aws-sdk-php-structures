<?php

namespace Sunaoka\Aws\Structures\LocationService\GetGeofence;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GeofenceId
 * @property Shapes\GeofenceGeometry $Geometry
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 * @property array<string, string> $GeofenceProperties
 */
class GetGeofenceResponse extends Response
{
}
