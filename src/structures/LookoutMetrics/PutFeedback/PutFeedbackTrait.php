<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\PutFeedback;

trait PutFeedbackTrait
{
    /**
     * @param PutFeedbackRequest $args
     * @return PutFeedbackResponse
     */
    public function putFeedback(PutFeedbackRequest $args)
    {
        $result = parent::putFeedback($args->toArray());
        return new PutFeedbackResponse($result->toArray());
    }
}
