<?php

namespace Sunaoka\Aws\Structures\Sustainability\GetEstimatedWaterAllocation;

trait GetEstimatedWaterAllocationTrait
{
    /**
     * @param GetEstimatedWaterAllocationRequest $args
     * @return GetEstimatedWaterAllocationResponse
     */
    public function getEstimatedWaterAllocation(GetEstimatedWaterAllocationRequest $args)
    {
        $result = parent::getEstimatedWaterAllocation($args->toArray());
        return new GetEstimatedWaterAllocationResponse($result->toArray());
    }
}
