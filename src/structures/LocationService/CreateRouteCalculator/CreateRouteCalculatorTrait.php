<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateRouteCalculator;

trait CreateRouteCalculatorTrait
{
    /**
     * @param CreateRouteCalculatorRequest $args
     * @return CreateRouteCalculatorResponse
     */
    public function createRouteCalculator(CreateRouteCalculatorRequest $args)
    {
        $result = parent::createRouteCalculator($args->toArray());
        return new CreateRouteCalculatorResponse($result->toArray());
    }
}
