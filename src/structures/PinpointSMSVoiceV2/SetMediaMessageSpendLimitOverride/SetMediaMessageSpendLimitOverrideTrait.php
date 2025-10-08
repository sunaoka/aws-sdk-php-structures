<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SetMediaMessageSpendLimitOverride;

trait SetMediaMessageSpendLimitOverrideTrait
{
    /**
     * @param SetMediaMessageSpendLimitOverrideRequest $args
     * @return SetMediaMessageSpendLimitOverrideResponse
     */
    public function setMediaMessageSpendLimitOverride(SetMediaMessageSpendLimitOverrideRequest $args)
    {
        $result = parent::setMediaMessageSpendLimitOverride($args->toArray());
        return new SetMediaMessageSpendLimitOverrideResponse($result->toArray());
    }
}
