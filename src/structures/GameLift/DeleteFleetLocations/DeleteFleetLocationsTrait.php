<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteFleetLocations;

trait DeleteFleetLocationsTrait
{
    /**
     * @param DeleteFleetLocationsRequest $args
     * @return DeleteFleetLocationsResponse
     */
    public function deleteFleetLocations(DeleteFleetLocationsRequest $args)
    {
        $result = parent::deleteFleetLocations($args->toArray());
        return new DeleteFleetLocationsResponse($result->toArray());
    }
}
