<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetSettings;

trait GetSettingsTrait
{
    /**
     * @param GetSettingsRequest $args
     * @return GetSettingsResponse
     */
    public function getSettings(GetSettingsRequest $args)
    {
        $result = parent::getSettings($args->toArray());
        return new GetSettingsResponse($result->toArray());
    }
}
