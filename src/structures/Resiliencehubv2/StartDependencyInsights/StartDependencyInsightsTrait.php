<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\StartDependencyInsights;

trait StartDependencyInsightsTrait
{
    /**
     * @param StartDependencyInsightsRequest $args
     * @return StartDependencyInsightsResponse
     */
    public function startDependencyInsights(StartDependencyInsightsRequest $args)
    {
        $result = parent::startDependencyInsights($args->toArray());
        return new StartDependencyInsightsResponse($result->toArray());
    }
}
