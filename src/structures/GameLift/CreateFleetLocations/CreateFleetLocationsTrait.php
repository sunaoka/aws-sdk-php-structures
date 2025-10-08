<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateFleetLocations;

trait CreateFleetLocationsTrait
{
    /**
     * @param CreateFleetLocationsRequest $args
     * @return CreateFleetLocationsResponse
     */
    public function createFleetLocations(CreateFleetLocationsRequest $args)
    {
        $result = parent::createFleetLocations($args->toArray());
        return new CreateFleetLocationsResponse($result->toArray());
    }
}
