<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\PutAppInstanceUserExpirationSettings;

trait PutAppInstanceUserExpirationSettingsTrait
{
    /**
     * @param PutAppInstanceUserExpirationSettingsRequest $args
     * @return PutAppInstanceUserExpirationSettingsResponse
     */
    public function putAppInstanceUserExpirationSettings(PutAppInstanceUserExpirationSettingsRequest $args)
    {
        $result = parent::putAppInstanceUserExpirationSettings($args->toArray());
        return new PutAppInstanceUserExpirationSettingsResponse($result->toArray());
    }
}
