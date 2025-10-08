<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteTextMessageSpendLimitOverride;

trait DeleteTextMessageSpendLimitOverrideTrait
{
    /**
     * @param DeleteTextMessageSpendLimitOverrideRequest $args
     * @return DeleteTextMessageSpendLimitOverrideResponse
     */
    public function deleteTextMessageSpendLimitOverride(DeleteTextMessageSpendLimitOverrideRequest $args)
    {
        $result = parent::deleteTextMessageSpendLimitOverride($args->toArray());
        return new DeleteTextMessageSpendLimitOverrideResponse($result->toArray());
    }
}
