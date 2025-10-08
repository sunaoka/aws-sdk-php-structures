<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationUtilization;

trait GetReservationUtilizationTrait
{
    /**
     * @param GetReservationUtilizationRequest $args
     * @return GetReservationUtilizationResponse
     */
    public function getReservationUtilization(GetReservationUtilizationRequest $args)
    {
        $result = parent::getReservationUtilization($args->toArray());
        return new GetReservationUtilizationResponse($result->toArray());
    }
}
