<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\SubmitFeedback;

trait SubmitFeedbackTrait
{
    /**
     * @param SubmitFeedbackRequest $args
     * @return SubmitFeedbackResponse
     */
    public function submitFeedback(SubmitFeedbackRequest $args)
    {
        $result = parent::submitFeedback($args->toArray());
        return new SubmitFeedbackResponse($result->toArray());
    }
}
