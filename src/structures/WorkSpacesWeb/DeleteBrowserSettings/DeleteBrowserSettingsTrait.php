<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DeleteBrowserSettings;

trait DeleteBrowserSettingsTrait
{
    /**
     * @param DeleteBrowserSettingsRequest $args
     * @return DeleteBrowserSettingsResponse
     */
    public function deleteBrowserSettings(DeleteBrowserSettingsRequest $args)
    {
        $result = parent::deleteBrowserSettings($args->toArray());
        return new DeleteBrowserSettingsResponse($result->toArray());
    }
}
