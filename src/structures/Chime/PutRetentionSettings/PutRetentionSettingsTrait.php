<?php

namespace Sunaoka\Aws\Structures\Chime\PutRetentionSettings;

trait PutRetentionSettingsTrait
{
    /**
     * @param PutRetentionSettingsRequest $args
     * @return PutRetentionSettingsResponse
     */
    public function putRetentionSettings(PutRetentionSettingsRequest $args)
    {
        $result = parent::putRetentionSettings($args->toArray());
        return new PutRetentionSettingsResponse($result->toArray());
    }
}
