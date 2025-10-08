<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateGlobalSettings;

trait UpdateGlobalSettingsTrait
{
    /**
     * @param UpdateGlobalSettingsRequest $args
     * @return void
     */
    public function updateGlobalSettings(UpdateGlobalSettingsRequest $args)
    {
        parent::updateGlobalSettings($args->toArray());
    }
}
