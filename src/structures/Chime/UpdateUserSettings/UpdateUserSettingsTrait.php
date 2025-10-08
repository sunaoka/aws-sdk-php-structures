<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateUserSettings;

trait UpdateUserSettingsTrait
{
    /**
     * @param UpdateUserSettingsRequest $args
     * @return void
     */
    public function updateUserSettings(UpdateUserSettingsRequest $args)
    {
        parent::updateUserSettings($args->toArray());
    }
}
