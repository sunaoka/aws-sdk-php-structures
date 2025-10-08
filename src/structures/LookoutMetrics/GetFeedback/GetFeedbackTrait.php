<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetFeedback;

trait GetFeedbackTrait
{
    /**
     * @param GetFeedbackRequest $args
     * @return GetFeedbackResponse
     */
    public function getFeedback(GetFeedbackRequest $args)
    {
        $result = parent::getFeedback($args->toArray());
        return new GetFeedbackResponse($result->toArray());
    }
}
