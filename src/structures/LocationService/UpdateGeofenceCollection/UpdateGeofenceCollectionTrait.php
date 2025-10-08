<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateGeofenceCollection;

trait UpdateGeofenceCollectionTrait
{
    /**
     * @param UpdateGeofenceCollectionRequest $args
     * @return UpdateGeofenceCollectionResponse
     */
    public function updateGeofenceCollection(UpdateGeofenceCollectionRequest $args)
    {
        $result = parent::updateGeofenceCollection($args->toArray());
        return new UpdateGeofenceCollectionResponse($result->toArray());
    }
}
