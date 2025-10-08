<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListMetricSets;

trait ListMetricSetsTrait
{
    /**
     * @param ListMetricSetsRequest $args
     * @return ListMetricSetsResponse
     */
    public function listMetricSets(ListMetricSetsRequest $args)
    {
        $result = parent::listMetricSets($args->toArray());
        return new ListMetricSetsResponse($result->toArray());
    }
}
