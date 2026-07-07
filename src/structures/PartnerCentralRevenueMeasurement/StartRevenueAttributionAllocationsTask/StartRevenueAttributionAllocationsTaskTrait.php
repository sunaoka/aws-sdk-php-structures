<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\StartRevenueAttributionAllocationsTask;

trait StartRevenueAttributionAllocationsTaskTrait
{
    /**
     * @param StartRevenueAttributionAllocationsTaskRequest $args
     * @return StartRevenueAttributionAllocationsTaskResponse
     */
    public function startRevenueAttributionAllocationsTask(StartRevenueAttributionAllocationsTaskRequest $args)
    {
        $result = parent::startRevenueAttributionAllocationsTask($args->toArray());
        return new StartRevenueAttributionAllocationsTaskResponse($result->toArray());
    }
}
