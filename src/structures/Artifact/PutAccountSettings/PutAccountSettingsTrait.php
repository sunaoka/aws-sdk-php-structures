<?php

namespace Sunaoka\Aws\Structures\Artifact\PutAccountSettings;

trait PutAccountSettingsTrait
{
    /**
     * @param PutAccountSettingsRequest $args
     * @return PutAccountSettingsResponse
     */
    public function putAccountSettings(PutAccountSettingsRequest $args)
    {
        $result = parent::putAccountSettings($args->toArray());
        return new PutAccountSettingsResponse($result->toArray());
    }
}
