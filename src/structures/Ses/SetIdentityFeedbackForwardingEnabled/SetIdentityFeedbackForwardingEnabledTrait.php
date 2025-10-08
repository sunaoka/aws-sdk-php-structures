<?php

namespace Sunaoka\Aws\Structures\Ses\SetIdentityFeedbackForwardingEnabled;

trait SetIdentityFeedbackForwardingEnabledTrait
{
    /**
     * @param SetIdentityFeedbackForwardingEnabledRequest $args
     * @return SetIdentityFeedbackForwardingEnabledResponse
     */
    public function setIdentityFeedbackForwardingEnabled(SetIdentityFeedbackForwardingEnabledRequest $args)
    {
        $result = parent::setIdentityFeedbackForwardingEnabled($args->toArray());
        return new SetIdentityFeedbackForwardingEnabledResponse($result->toArray());
    }
}
