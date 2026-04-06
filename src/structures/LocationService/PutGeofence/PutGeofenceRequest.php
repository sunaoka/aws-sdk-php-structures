<?php

namespace Sunaoka\Aws\Structures\LocationService\PutGeofence;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionName
 * @property string $GeofenceId
 * @property Shapes\GeofenceGeometry $Geometry
 * @property array<string, string>|null $GeofenceProperties
 */
class PutGeofenceRequest extends Request
{
    /**
     * @param array{
     *     CollectionName: string,
     *     GeofenceId: string,
     *     Geometry: Shapes\GeofenceGeometry,
     *     GeofenceProperties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
