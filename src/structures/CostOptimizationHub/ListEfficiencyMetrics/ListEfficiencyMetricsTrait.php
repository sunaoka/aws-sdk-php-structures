<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListEfficiencyMetrics;

trait ListEfficiencyMetricsTrait
{
    /**
     * @param ListEfficiencyMetricsRequest $args
     * @return ListEfficiencyMetricsResponse
     */
    public function listEfficiencyMetrics(ListEfficiencyMetricsRequest $args)
    {
        $result = parent::listEfficiencyMetrics($args->toArray());
        return new ListEfficiencyMetricsResponse($result->toArray());
    }
}
