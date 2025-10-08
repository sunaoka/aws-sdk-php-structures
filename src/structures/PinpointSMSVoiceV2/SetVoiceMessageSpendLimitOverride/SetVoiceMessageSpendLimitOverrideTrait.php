<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SetVoiceMessageSpendLimitOverride;

trait SetVoiceMessageSpendLimitOverrideTrait
{
    /**
     * @param SetVoiceMessageSpendLimitOverrideRequest $args
     * @return SetVoiceMessageSpendLimitOverrideResponse
     */
    public function setVoiceMessageSpendLimitOverride(SetVoiceMessageSpendLimitOverrideRequest $args)
    {
        $result = parent::setVoiceMessageSpendLimitOverride($args->toArray());
        return new SetVoiceMessageSpendLimitOverrideResponse($result->toArray());
    }
}
