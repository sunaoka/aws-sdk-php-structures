<?php

namespace Sunaoka\Aws\Structures\Textract\GetDocumentInsights;

trait GetDocumentInsightsTrait
{
    /**
     * @param GetDocumentInsightsRequest $args
     * @return GetDocumentInsightsResponse
     */
    public function getDocumentInsights(GetDocumentInsightsRequest $args)
    {
        $result = parent::getDocumentInsights($args->toArray());
        return new GetDocumentInsightsResponse($result->toArray());
    }
}
