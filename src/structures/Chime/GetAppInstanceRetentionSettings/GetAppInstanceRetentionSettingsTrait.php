<?php

namespace Sunaoka\Aws\Structures\Chime\GetAppInstanceRetentionSettings;

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
