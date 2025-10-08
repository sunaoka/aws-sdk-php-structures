<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRegionSettings;

trait UpdateRegionSettingsTrait
{
    /**
     * @param UpdateRegionSettingsRequest $args
     * @return void
     */
    public function updateRegionSettings(UpdateRegionSettingsRequest $args)
    {
        parent::updateRegionSettings($args->toArray());
    }
}
