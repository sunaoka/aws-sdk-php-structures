<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListSourceLocations;

trait ListSourceLocationsTrait
{
    /**
     * @param ListSourceLocationsRequest $args
     * @return ListSourceLocationsResponse
     */
    public function listSourceLocations(ListSourceLocationsRequest $args)
    {
        $result = parent::listSourceLocations($args->toArray());
        return new ListSourceLocationsResponse($result->toArray());
    }
}
