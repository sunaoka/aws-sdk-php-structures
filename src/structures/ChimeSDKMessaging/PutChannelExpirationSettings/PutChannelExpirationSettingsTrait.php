<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\PutChannelExpirationSettings;

trait PutChannelExpirationSettingsTrait
{
    /**
     * @param PutChannelExpirationSettingsRequest $args
     * @return PutChannelExpirationSettingsResponse
     */
    public function putChannelExpirationSettings(PutChannelExpirationSettingsRequest $args)
    {
        $result = parent::putChannelExpirationSettings($args->toArray());
        return new PutChannelExpirationSettingsResponse($result->toArray());
    }
}
