<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\InsightFeedback;

trait InsightFeedbackTrait
{
    /**
     * @param InsightFeedbackRequest $args
     * @return InsightFeedbackResponse
     */
    public function insightFeedback(InsightFeedbackRequest $args)
    {
        $result = parent::insightFeedback($args->toArray());
        return new InsightFeedbackResponse($result->toArray());
    }
}
