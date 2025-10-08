<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetInsightSelectors;

trait GetInsightSelectorsTrait
{
    /**
     * @param GetInsightSelectorsRequest $args
     * @return GetInsightSelectorsResponse
     */
    public function getInsightSelectors(GetInsightSelectorsRequest $args)
    {
        $result = parent::getInsightSelectors($args->toArray());
        return new GetInsightSelectorsResponse($result->toArray());
    }
}
