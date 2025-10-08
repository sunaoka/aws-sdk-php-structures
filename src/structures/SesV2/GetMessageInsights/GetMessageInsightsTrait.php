<?php

namespace Sunaoka\Aws\Structures\SesV2\GetMessageInsights;

trait GetMessageInsightsTrait
{
    /**
     * @param GetMessageInsightsRequest $args
     * @return GetMessageInsightsResponse
     */
    public function getMessageInsights(GetMessageInsightsRequest $args)
    {
        $result = parent::getMessageInsights($args->toArray());
        return new GetMessageInsightsResponse($result->toArray());
    }
}
