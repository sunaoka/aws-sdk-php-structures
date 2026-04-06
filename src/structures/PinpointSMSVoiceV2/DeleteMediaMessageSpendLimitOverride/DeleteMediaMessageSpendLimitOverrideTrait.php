<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteMediaMessageSpendLimitOverride;

trait DeleteMediaMessageSpendLimitOverrideTrait
{
    /**
     * @param DeleteMediaMessageSpendLimitOverrideRequest $args
     * @return DeleteMediaMessageSpendLimitOverrideResponse
     */
    public function deleteMediaMessageSpendLimitOverride(DeleteMediaMessageSpendLimitOverrideRequest $args)
    {
        $result = parent::deleteMediaMessageSpendLimitOverride($args->toArray());
        return new DeleteMediaMessageSpendLimitOverrideResponse($result->toArray());
    }
}
