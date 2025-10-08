<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateSettings;

trait UpdateSettingsTrait
{
    /**
     * @param UpdateSettingsRequest $args
     * @return UpdateSettingsResponse
     */
    public function updateSettings(UpdateSettingsRequest $args)
    {
        $result = parent::updateSettings($args->toArray());
        return new UpdateSettingsResponse($result->toArray());
    }
}
