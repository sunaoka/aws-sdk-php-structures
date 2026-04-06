<?php

namespace Sunaoka\Aws\Structures\LocationService\PutGeofence;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionName
 * @property string $GeofenceId
 * @property array<string, string>|null $GeofenceProperties
 * @property Shapes\GeofenceGeometry $Geometry
 */
class PutGeofenceRequest extends Request
{
    /**
     * @param array{
     *     CollectionName: string,
     *     GeofenceId: string,
     *     GeofenceProperties?: array<string, string>|null,
     *     Geometry: Shapes\GeofenceGeometry
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
