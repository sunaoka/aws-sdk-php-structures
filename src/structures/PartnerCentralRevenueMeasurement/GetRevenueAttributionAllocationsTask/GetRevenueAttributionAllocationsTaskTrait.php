<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetRevenueAttributionAllocationsTask;

trait GetRevenueAttributionAllocationsTaskTrait
{
    /**
     * @param GetRevenueAttributionAllocationsTaskRequest $args
     * @return GetRevenueAttributionAllocationsTaskResponse
     */
    public function getRevenueAttributionAllocationsTask(GetRevenueAttributionAllocationsTaskRequest $args)
    {
        $result = parent::getRevenueAttributionAllocationsTask($args->toArray());
        return new GetRevenueAttributionAllocationsTaskResponse($result->toArray());
    }
}
