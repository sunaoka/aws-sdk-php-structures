<?php

namespace Sunaoka\Aws\Structures\LocationService\ListGeofenceCollections;

trait ListGeofenceCollectionsTrait
{
    /**
     * @param ListGeofenceCollectionsRequest $args
     * @return ListGeofenceCollectionsResponse
     */
    public function listGeofenceCollections(ListGeofenceCollectionsRequest $args)
    {
        $result = parent::listGeofenceCollections($args->toArray());
        return new ListGeofenceCollectionsResponse($result->toArray());
    }
}
