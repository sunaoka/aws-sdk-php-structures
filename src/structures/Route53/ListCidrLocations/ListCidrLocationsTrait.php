<?php

namespace Sunaoka\Aws\Structures\Route53\ListCidrLocations;

trait ListCidrLocationsTrait
{
    /**
     * @param ListCidrLocationsRequest $args
     * @return ListCidrLocationsResponse
     */
    public function listCidrLocations(ListCidrLocationsRequest $args)
    {
        $result = parent::listCidrLocations($args->toArray());
        return new ListCidrLocationsResponse($result->toArray());
    }
}
