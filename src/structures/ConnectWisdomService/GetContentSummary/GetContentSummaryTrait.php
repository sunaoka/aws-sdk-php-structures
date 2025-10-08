<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetContentSummary;

trait GetContentSummaryTrait
{
    /**
     * @param GetContentSummaryRequest $args
     * @return GetContentSummaryResponse
     */
    public function getContentSummary(GetContentSummaryRequest $args)
    {
        $result = parent::getContentSummary($args->toArray());
        return new GetContentSummaryResponse($result->toArray());
    }
}
