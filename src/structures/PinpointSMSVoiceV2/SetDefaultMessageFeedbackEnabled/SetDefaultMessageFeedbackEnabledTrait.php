<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SetDefaultMessageFeedbackEnabled;

trait SetDefaultMessageFeedbackEnabledTrait
{
    /**
     * @param SetDefaultMessageFeedbackEnabledRequest $args
     * @return SetDefaultMessageFeedbackEnabledResponse
     */
    public function setDefaultMessageFeedbackEnabled(SetDefaultMessageFeedbackEnabledRequest $args)
    {
        $result = parent::setDefaultMessageFeedbackEnabled($args->toArray());
        return new SetDefaultMessageFeedbackEnabledResponse($result->toArray());
    }
}
