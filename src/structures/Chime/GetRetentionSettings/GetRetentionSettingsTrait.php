<?php

namespace Sunaoka\Aws\Structures\Chime\GetRetentionSettings;

trait GetRetentionSettingsTrait
{
    /**
     * @param GetRetentionSettingsRequest $args
     * @return GetRetentionSettingsResponse
     */
    public function getRetentionSettings(GetRetentionSettingsRequest $args)
    {
        $result = parent::getRetentionSettings($args->toArray());
        return new GetRetentionSettingsResponse($result->toArray());
    }
}
