<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\AddStreamGroupLocations;

trait AddStreamGroupLocationsTrait
{
    /**
     * @param AddStreamGroupLocationsRequest $args
     * @return AddStreamGroupLocationsResponse
     */
    public function addStreamGroupLocations(AddStreamGroupLocationsRequest $args)
    {
        $result = parent::addStreamGroupLocations($args->toArray());
        return new AddStreamGroupLocationsResponse($result->toArray());
    }
}
