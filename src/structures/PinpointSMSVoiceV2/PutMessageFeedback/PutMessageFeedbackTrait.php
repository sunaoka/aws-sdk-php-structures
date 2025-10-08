<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\PutMessageFeedback;

trait PutMessageFeedbackTrait
{
    /**
     * @param PutMessageFeedbackRequest $args
     * @return PutMessageFeedbackResponse
     */
    public function putMessageFeedback(PutMessageFeedbackRequest $args)
    {
        $result = parent::putMessageFeedback($args->toArray());
        return new PutMessageFeedbackResponse($result->toArray());
    }
}
