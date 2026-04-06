<?php

namespace Sunaoka\Aws\Structures\SecurityIR\SendFeedback;

trait SendFeedbackTrait
{
    /**
     * @param SendFeedbackRequest $args
     * @return SendFeedbackResponse
     */
    public function sendFeedback(SendFeedbackRequest $args)
    {
        $result = parent::sendFeedback($args->toArray());
        return new SendFeedbackResponse($result->toArray());
    }
}
