<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostComparisonDrivers;

trait GetCostComparisonDriversTrait
{
    /**
     * @param GetCostComparisonDriversRequest $args
     * @return GetCostComparisonDriversResponse
     */
    public function getCostComparisonDrivers(GetCostComparisonDriversRequest $args)
    {
        $result = parent::getCostComparisonDrivers($args->toArray());
        return new GetCostComparisonDriversResponse($result->toArray());
    }
}
