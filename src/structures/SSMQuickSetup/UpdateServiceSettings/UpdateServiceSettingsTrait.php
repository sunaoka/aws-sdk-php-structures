<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\UpdateServiceSettings;

trait UpdateServiceSettingsTrait
{
    /**
     * @param UpdateServiceSettingsRequest $args
     * @return void
     */
    public function updateServiceSettings(UpdateServiceSettingsRequest $args)
    {
        parent::updateServiceSettings($args->toArray());
    }
}
