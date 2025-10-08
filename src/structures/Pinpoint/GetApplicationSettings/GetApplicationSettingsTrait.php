<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApplicationSettings;

trait GetApplicationSettingsTrait
{
    /**
     * @param GetApplicationSettingsRequest $args
     * @return GetApplicationSettingsResponse
     */
    public function getApplicationSettings(GetApplicationSettingsRequest $args)
    {
        $result = parent::getApplicationSettings($args->toArray());
        return new GetApplicationSettingsResponse($result->toArray());
    }
}
