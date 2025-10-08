<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminUpdateAuthEventFeedback;

trait AdminUpdateAuthEventFeedbackTrait
{
    /**
     * @param AdminUpdateAuthEventFeedbackRequest $args
     * @return AdminUpdateAuthEventFeedbackResponse
     */
    public function adminUpdateAuthEventFeedback(AdminUpdateAuthEventFeedbackRequest $args)
    {
        $result = parent::adminUpdateAuthEventFeedback($args->toArray());
        return new AdminUpdateAuthEventFeedbackResponse($result->toArray());
    }
}
