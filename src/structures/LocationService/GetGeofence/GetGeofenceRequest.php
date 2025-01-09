<?php

namespace Sunaoka\Aws\Structures\LocationService\GetGeofence;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionName
 * @property string $GeofenceId
 */
class GetGeofenceRequest extends Request
{
    /**
     * @param array{
     *     CollectionName: string,
     *     GeofenceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
