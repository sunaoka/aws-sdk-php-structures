<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightSummaries;

trait GetInsightSummariesTrait
{
    /**
     * @param GetInsightSummariesRequest $args
     * @return GetInsightSummariesResponse
     */
    public function getInsightSummaries(GetInsightSummariesRequest $args)
    {
        $result = parent::getInsightSummaries($args->toArray());
        return new GetInsightSummariesResponse($result->toArray());
    }
}
