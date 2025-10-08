<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListInsights;

trait ListInsightsTrait
{
    /**
     * @param ListInsightsRequest $args
     * @return ListInsightsResponse
     */
    public function listInsights(ListInsightsRequest $args)
    {
        $result = parent::listInsights($args->toArray());
        return new ListInsightsResponse($result->toArray());
    }
}
