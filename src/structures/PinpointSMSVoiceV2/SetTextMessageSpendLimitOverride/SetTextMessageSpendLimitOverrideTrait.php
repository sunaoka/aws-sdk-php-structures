<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SetTextMessageSpendLimitOverride;

trait SetTextMessageSpendLimitOverrideTrait
{
    /**
     * @param SetTextMessageSpendLimitOverrideRequest $args
     * @return SetTextMessageSpendLimitOverrideResponse
     */
    public function setTextMessageSpendLimitOverride(SetTextMessageSpendLimitOverrideRequest $args)
    {
        $result = parent::setTextMessageSpendLimitOverride($args->toArray());
        return new SetTextMessageSpendLimitOverrideResponse($result->toArray());
    }
}
