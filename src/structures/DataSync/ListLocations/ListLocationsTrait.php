<?php

namespace Sunaoka\Aws\Structures\DataSync\ListLocations;

trait ListLocationsTrait
{
    /**
     * @param ListLocationsRequest $args
     * @return ListLocationsResponse
     */
    public function listLocations(ListLocationsRequest $args)
    {
        $result = parent::listLocations($args->toArray());
        return new ListLocationsResponse($result->toArray());
    }
}
