<?php

namespace Sunaoka\Aws\Structures\Ssm\GetServiceSetting;

trait GetServiceSettingTrait
{
    /**
     * @param GetServiceSettingRequest $args
     * @return GetServiceSettingResponse
     */
    public function getServiceSetting(GetServiceSettingRequest $args)
    {
        $result = parent::getServiceSetting($args->toArray());
        return new GetServiceSettingResponse($result->toArray());
    }
}
