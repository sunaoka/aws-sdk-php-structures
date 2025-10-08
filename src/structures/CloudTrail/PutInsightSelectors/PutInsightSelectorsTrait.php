<?php

namespace Sunaoka\Aws\Structures\CloudTrail\PutInsightSelectors;

trait PutInsightSelectorsTrait
{
    /**
     * @param PutInsightSelectorsRequest $args
     * @return PutInsightSelectorsResponse
     */
    public function putInsightSelectors(PutInsightSelectorsRequest $args)
    {
        $result = parent::putInsightSelectors($args->toArray());
        return new PutInsightSelectorsResponse($result->toArray());
    }
}
