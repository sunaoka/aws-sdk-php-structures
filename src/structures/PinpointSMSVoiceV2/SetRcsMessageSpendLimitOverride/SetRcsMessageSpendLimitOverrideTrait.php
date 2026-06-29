<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SetRcsMessageSpendLimitOverride;

trait SetRcsMessageSpendLimitOverrideTrait
{
    /**
     * @param SetRcsMessageSpendLimitOverrideRequest $args
     * @return SetRcsMessageSpendLimitOverrideResponse
     */
    public function setRcsMessageSpendLimitOverride(SetRcsMessageSpendLimitOverrideRequest $args)
    {
        $result = parent::setRcsMessageSpendLimitOverride($args->toArray());
        return new SetRcsMessageSpendLimitOverrideResponse($result->toArray());
    }
}
