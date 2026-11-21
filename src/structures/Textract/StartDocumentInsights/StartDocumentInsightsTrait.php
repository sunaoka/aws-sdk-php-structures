<?php

namespace Sunaoka\Aws\Structures\Textract\StartDocumentInsights;

trait StartDocumentInsightsTrait
{
    /**
     * @param StartDocumentInsightsRequest $args
     * @return StartDocumentInsightsResponse
     */
    public function startDocumentInsights(StartDocumentInsightsRequest $args)
    {
        $result = parent::startDocumentInsights($args->toArray());
        return new StartDocumentInsightsResponse($result->toArray());
    }
}
