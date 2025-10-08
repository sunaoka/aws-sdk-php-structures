<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetInsights;

trait GetInsightsTrait
{
    /**
     * @param GetInsightsRequest $args
     * @return GetInsightsResponse
     */
    public function getInsights(GetInsightsRequest $args)
    {
        $result = parent::getInsights($args->toArray());
        return new GetInsightsResponse($result->toArray());
    }
}
