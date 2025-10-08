<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateUserAccessLoggingSettings;

trait CreateUserAccessLoggingSettingsTrait
{
    /**
     * @param CreateUserAccessLoggingSettingsRequest $args
     * @return CreateUserAccessLoggingSettingsResponse
     */
    public function createUserAccessLoggingSettings(CreateUserAccessLoggingSettingsRequest $args)
    {
        $result = parent::createUserAccessLoggingSettings($args->toArray());
        return new CreateUserAccessLoggingSettingsResponse($result->toArray());
    }
}
