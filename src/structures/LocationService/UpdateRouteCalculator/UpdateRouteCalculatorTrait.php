<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateRouteCalculator;

trait UpdateRouteCalculatorTrait
{
    /**
     * @param UpdateRouteCalculatorRequest $args
     * @return UpdateRouteCalculatorResponse
     */
    public function updateRouteCalculator(UpdateRouteCalculatorRequest $args)
    {
        $result = parent::updateRouteCalculator($args->toArray());
        return new UpdateRouteCalculatorResponse($result->toArray());
    }
}
