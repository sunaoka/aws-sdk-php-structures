<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListPickupLocations;

trait ListPickupLocationsTrait
{
    /**
     * @param ListPickupLocationsRequest $args
     * @return ListPickupLocationsResponse
     */
    public function listPickupLocations(ListPickupLocationsRequest $args)
    {
        $result = parent::listPickupLocations($args->toArray());
        return new ListPickupLocationsResponse($result->toArray());
    }
}
