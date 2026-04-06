<?php

namespace Sunaoka\Aws\Structures\EKS\StartInsightsRefresh;

trait StartInsightsRefreshTrait
{
    /**
     * @param StartInsightsRefreshRequest $args
     * @return StartInsightsRefreshResponse
     */
    public function startInsightsRefresh(StartInsightsRefreshRequest $args)
    {
        $result = parent::startInsightsRefresh($args->toArray());
        return new StartInsightsRefreshResponse($result->toArray());
    }
}
