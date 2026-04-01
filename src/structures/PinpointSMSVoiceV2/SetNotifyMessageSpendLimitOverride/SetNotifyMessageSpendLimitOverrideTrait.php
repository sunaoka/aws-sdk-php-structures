<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SetNotifyMessageSpendLimitOverride;

trait SetNotifyMessageSpendLimitOverrideTrait
{
    /**
     * @param SetNotifyMessageSpendLimitOverrideRequest $args
     * @return SetNotifyMessageSpendLimitOverrideResponse
     */
    public function setNotifyMessageSpendLimitOverride(SetNotifyMessageSpendLimitOverrideRequest $args)
    {
        $result = parent::setNotifyMessageSpendLimitOverride($args->toArray());
        return new SetNotifyMessageSpendLimitOverrideResponse($result->toArray());
    }
}
