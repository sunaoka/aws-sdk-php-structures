<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessGrantsLocations;

trait ListAccessGrantsLocationsTrait
{
    /**
     * @param ListAccessGrantsLocationsRequest $args
     * @return ListAccessGrantsLocationsResponse
     */
    public function listAccessGrantsLocations(ListAccessGrantsLocationsRequest $args)
    {
        $result = parent::listAccessGrantsLocations($args->toArray());
        return new ListAccessGrantsLocationsResponse($result->toArray());
    }
}
