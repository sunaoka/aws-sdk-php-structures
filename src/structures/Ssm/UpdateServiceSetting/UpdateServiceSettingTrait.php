<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateServiceSetting;

trait UpdateServiceSettingTrait
{
    /**
     * @param UpdateServiceSettingRequest $args
     * @return UpdateServiceSettingResponse
     */
    public function updateServiceSetting(UpdateServiceSettingRequest $args)
    {
        $result = parent::updateServiceSetting($args->toArray());
        return new UpdateServiceSettingResponse($result->toArray());
    }
}
