<?php

namespace Sunaoka\Aws\Structures\LocationService\ListRouteCalculators;

trait ListRouteCalculatorsTrait
{
    /**
     * @param ListRouteCalculatorsRequest $args
     * @return ListRouteCalculatorsResponse
     */
    public function listRouteCalculators(ListRouteCalculatorsRequest $args)
    {
        $result = parent::listRouteCalculators($args->toArray());
        return new ListRouteCalculatorsResponse($result->toArray());
    }
}
