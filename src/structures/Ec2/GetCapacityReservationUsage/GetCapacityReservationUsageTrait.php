<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityReservationUsage;

trait GetCapacityReservationUsageTrait
{
    /**
     * @param GetCapacityReservationUsageRequest $args
     * @return GetCapacityReservationUsageResponse
     */
    public function getCapacityReservationUsage(GetCapacityReservationUsageRequest $args)
    {
        $result = parent::getCapacityReservationUsage($args->toArray());
        return new GetCapacityReservationUsageResponse($result->toArray());
    }
}
