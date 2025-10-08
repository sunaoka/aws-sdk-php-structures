<?php

namespace Sunaoka\Aws\Structures\Ssm\ResetServiceSetting;

trait ResetServiceSettingTrait
{
    /**
     * @param ResetServiceSettingRequest $args
     * @return ResetServiceSettingResponse
     */
    public function resetServiceSetting(ResetServiceSettingRequest $args)
    {
        $result = parent::resetServiceSetting($args->toArray());
        return new ResetServiceSettingResponse($result->toArray());
    }
}
