<?php

namespace Sunaoka\Aws\Structures\LocationService\DeleteRouteCalculator;

trait DeleteRouteCalculatorTrait
{
    /**
     * @param DeleteRouteCalculatorRequest $args
     * @return DeleteRouteCalculatorResponse
     */
    public function deleteRouteCalculator(DeleteRouteCalculatorRequest $args)
    {
        $result = parent::deleteRouteCalculator($args->toArray());
        return new DeleteRouteCalculatorResponse($result->toArray());
    }
}
