<?php

namespace Sunaoka\Aws\Structures\LocationService\ListGeofences;

trait ListGeofencesTrait
{
    /**
     * @param ListGeofencesRequest $args
     * @return ListGeofencesResponse
     */
    public function listGeofences(ListGeofencesRequest $args)
    {
        $result = parent::listGeofences($args->toArray());
        return new ListGeofencesResponse($result->toArray());
    }
}
