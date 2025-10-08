<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateBrowserSettings;

trait UpdateBrowserSettingsTrait
{
    /**
     * @param UpdateBrowserSettingsRequest $args
     * @return UpdateBrowserSettingsResponse
     */
    public function updateBrowserSettings(UpdateBrowserSettingsRequest $args)
    {
        $result = parent::updateBrowserSettings($args->toArray());
        return new UpdateBrowserSettingsResponse($result->toArray());
    }
}
