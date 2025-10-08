<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetBrowserSettings;

trait GetBrowserSettingsTrait
{
    /**
     * @param GetBrowserSettingsRequest $args
     * @return GetBrowserSettingsResponse
     */
    public function getBrowserSettings(GetBrowserSettingsRequest $args)
    {
        $result = parent::getBrowserSettings($args->toArray());
        return new GetBrowserSettingsResponse($result->toArray());
    }
}
