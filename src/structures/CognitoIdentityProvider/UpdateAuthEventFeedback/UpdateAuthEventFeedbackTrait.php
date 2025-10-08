<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateAuthEventFeedback;

trait UpdateAuthEventFeedbackTrait
{
    /**
     * @param UpdateAuthEventFeedbackRequest $args
     * @return UpdateAuthEventFeedbackResponse
     */
    public function updateAuthEventFeedback(UpdateAuthEventFeedbackRequest $args)
    {
        $result = parent::updateAuthEventFeedback($args->toArray());
        return new UpdateAuthEventFeedbackResponse($result->toArray());
    }
}
