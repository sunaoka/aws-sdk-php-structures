<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateUserSettings;

trait CreateUserSettingsTrait
{
    /**
     * @param CreateUserSettingsRequest $args
     * @return CreateUserSettingsResponse
     */
    public function createUserSettings(CreateUserSettingsRequest $args)
    {
        $result = parent::createUserSettings($args->toArray());
        return new CreateUserSettingsResponse($result->toArray());
    }
}
