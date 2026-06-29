<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteRcsMessageSpendLimitOverride;

trait DeleteRcsMessageSpendLimitOverrideTrait
{
    /**
     * @param DeleteRcsMessageSpendLimitOverrideRequest $args
     * @return DeleteRcsMessageSpendLimitOverrideResponse
     */
    public function deleteRcsMessageSpendLimitOverride(DeleteRcsMessageSpendLimitOverrideRequest $args)
    {
        $result = parent::deleteRcsMessageSpendLimitOverride($args->toArray());
        return new DeleteRcsMessageSpendLimitOverrideResponse($result->toArray());
    }
}
