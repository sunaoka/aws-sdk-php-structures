<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsageComparisons;

trait GetCostAndUsageComparisonsTrait
{
    /**
     * @param GetCostAndUsageComparisonsRequest $args
     * @return GetCostAndUsageComparisonsResponse
     */
    public function getCostAndUsageComparisons(GetCostAndUsageComparisonsRequest $args)
    {
        $result = parent::getCostAndUsageComparisons($args->toArray());
        return new GetCostAndUsageComparisonsResponse($result->toArray());
    }
}
