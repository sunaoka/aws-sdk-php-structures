<?php

namespace Sunaoka\Aws\Structures\LocationService\DeleteGeofenceCollection;

trait DeleteGeofenceCollectionTrait
{
    /**
     * @param DeleteGeofenceCollectionRequest $args
     * @return DeleteGeofenceCollectionResponse
     */
    public function deleteGeofenceCollection(DeleteGeofenceCollectionRequest $args)
    {
        $result = parent::deleteGeofenceCollection($args->toArray());
        return new DeleteGeofenceCollectionResponse($result->toArray());
    }
}
