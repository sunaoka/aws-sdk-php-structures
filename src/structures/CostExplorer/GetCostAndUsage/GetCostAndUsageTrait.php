<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsage;

trait GetCostAndUsageTrait
{
    /**
     * @param GetCostAndUsageRequest $args
     * @return GetCostAndUsageResponse
     */
    public function getCostAndUsage(GetCostAndUsageRequest $args)
    {
        $result = parent::getCostAndUsage($args->toArray());
        return new GetCostAndUsageResponse($result->toArray());
    }
}
