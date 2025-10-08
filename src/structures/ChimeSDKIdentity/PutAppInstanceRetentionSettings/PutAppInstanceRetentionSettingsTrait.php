<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\PutAppInstanceRetentionSettings;

trait PutAppInstanceRetentionSettingsTrait
{
    /**
     * @param PutAppInstanceRetentionSettingsRequest $args
     * @return PutAppInstanceRetentionSettingsResponse
     */
    public function putAppInstanceRetentionSettings(PutAppInstanceRetentionSettingsRequest $args)
    {
        $result = parent::putAppInstanceRetentionSettings($args->toArray());
        return new PutAppInstanceRetentionSettingsResponse($result->toArray());
    }
}
