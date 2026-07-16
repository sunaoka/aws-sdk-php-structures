<?php

namespace Sunaoka\Aws\Structures\Sustainability\GetEstimatedWaterAllocationDimensionValues;

trait GetEstimatedWaterAllocationDimensionValuesTrait
{
    /**
     * @param GetEstimatedWaterAllocationDimensionValuesRequest $args
     * @return GetEstimatedWaterAllocationDimensionValuesResponse
     */
    public function getEstimatedWaterAllocationDimensionValues(GetEstimatedWaterAllocationDimensionValuesRequest $args)
    {
        $result = parent::getEstimatedWaterAllocationDimensionValues($args->toArray());
        return new GetEstimatedWaterAllocationDimensionValuesResponse($result->toArray());
    }
}
