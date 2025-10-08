<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsageWithResources;

trait GetCostAndUsageWithResourcesTrait
{
    /**
     * @param GetCostAndUsageWithResourcesRequest $args
     * @return GetCostAndUsageWithResourcesResponse
     */
    public function getCostAndUsageWithResources(GetCostAndUsageWithResourcesRequest $args)
    {
        $result = parent::getCostAndUsageWithResources($args->toArray());
        return new GetCostAndUsageWithResourcesResponse($result->toArray());
    }
}
