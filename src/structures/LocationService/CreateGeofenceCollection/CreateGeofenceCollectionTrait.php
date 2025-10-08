<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateGeofenceCollection;

trait CreateGeofenceCollectionTrait
{
    /**
     * @param CreateGeofenceCollectionRequest $args
     * @return CreateGeofenceCollectionResponse
     */
    public function createGeofenceCollection(CreateGeofenceCollectionRequest $args)
    {
        $result = parent::createGeofenceCollection($args->toArray());
        return new CreateGeofenceCollectionResponse($result->toArray());
    }
}
