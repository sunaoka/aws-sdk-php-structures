<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteNotifyMessageSpendLimitOverride;

trait DeleteNotifyMessageSpendLimitOverrideTrait
{
    /**
     * @param DeleteNotifyMessageSpendLimitOverrideRequest $args
     * @return DeleteNotifyMessageSpendLimitOverrideResponse
     */
    public function deleteNotifyMessageSpendLimitOverride(DeleteNotifyMessageSpendLimitOverrideRequest $args)
    {
        $result = parent::deleteNotifyMessageSpendLimitOverride($args->toArray());
        return new DeleteNotifyMessageSpendLimitOverrideResponse($result->toArray());
    }
}
