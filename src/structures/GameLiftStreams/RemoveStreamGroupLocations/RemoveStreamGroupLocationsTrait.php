<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\RemoveStreamGroupLocations;

trait RemoveStreamGroupLocationsTrait
{
    /**
     * @param RemoveStreamGroupLocationsRequest $args
     * @return void
     */
    public function removeStreamGroupLocations(RemoveStreamGroupLocationsRequest $args)
    {
        parent::removeStreamGroupLocations($args->toArray());
    }
}
