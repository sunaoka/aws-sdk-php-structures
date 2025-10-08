<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListBrowserSettings;

trait ListBrowserSettingsTrait
{
    /**
     * @param ListBrowserSettingsRequest $args
     * @return ListBrowserSettingsResponse
     */
    public function listBrowserSettings(ListBrowserSettingsRequest $args)
    {
        $result = parent::listBrowserSettings($args->toArray());
        return new ListBrowserSettingsResponse($result->toArray());
    }
}
