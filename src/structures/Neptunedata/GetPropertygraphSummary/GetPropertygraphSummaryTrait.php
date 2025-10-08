<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetPropertygraphSummary;

trait GetPropertygraphSummaryTrait
{
    /**
     * @param GetPropertygraphSummaryRequest $args
     * @return GetPropertygraphSummaryResponse
     */
    public function getPropertygraphSummary(GetPropertygraphSummaryRequest $args)
    {
        $result = parent::getPropertygraphSummary($args->toArray());
        return new GetPropertygraphSummaryResponse($result->toArray());
    }
}
