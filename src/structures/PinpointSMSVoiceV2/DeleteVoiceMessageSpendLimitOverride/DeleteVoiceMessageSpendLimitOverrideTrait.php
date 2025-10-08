<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteVoiceMessageSpendLimitOverride;

trait DeleteVoiceMessageSpendLimitOverrideTrait
{
    /**
     * @param DeleteVoiceMessageSpendLimitOverrideRequest $args
     * @return DeleteVoiceMessageSpendLimitOverrideResponse
     */
    public function deleteVoiceMessageSpendLimitOverride(DeleteVoiceMessageSpendLimitOverrideRequest $args)
    {
        $result = parent::deleteVoiceMessageSpendLimitOverride($args->toArray());
        return new DeleteVoiceMessageSpendLimitOverrideResponse($result->toArray());
    }
}
