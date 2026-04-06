<?php

namespace Sunaoka\Aws\Structures\LocationService\GetGeofence;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $GeofenceId
 * @property array<string, string>|null $GeofenceProperties
 * @property Shapes\GeofenceGeometry $Geometry
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class GetGeofenceResponse extends Response
{
}
