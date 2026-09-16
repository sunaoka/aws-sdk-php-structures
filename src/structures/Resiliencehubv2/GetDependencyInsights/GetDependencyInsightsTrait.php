<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetDependencyInsights;

trait GetDependencyInsightsTrait
{
    /**
     * @param GetDependencyInsightsRequest $args
     * @return GetDependencyInsightsResponse
     */
    public function getDependencyInsights(GetDependencyInsightsRequest $args)
    {
        $result = parent::getDependencyInsights($args->toArray());
        return new GetDependencyInsightsResponse($result->toArray());
    }
}
