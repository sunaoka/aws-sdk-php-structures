<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\GetAppInstanceRetentionSettings;

trait GetAppInstanceRetentionSettingsTrait
{
    /**
     * @param GetAppInstanceRetentionSettingsRequest $args
     * @return GetAppInstanceRetentionSettingsResponse
     */
    public function getAppInstanceRetentionSettings(GetAppInstanceRetentionSettingsRequest $args)
    {
        $result = parent::getAppInstanceRetentionSettings($args->toArray());
        return new GetAppInstanceRetentionSettingsResponse($result->toArray());
    }
}
