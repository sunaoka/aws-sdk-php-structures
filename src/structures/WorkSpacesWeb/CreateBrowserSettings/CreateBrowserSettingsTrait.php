<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateBrowserSettings;

trait CreateBrowserSettingsTrait
{
    /**
     * @param CreateBrowserSettingsRequest $args
     * @return CreateBrowserSettingsResponse
     */
    public function createBrowserSettings(CreateBrowserSettingsRequest $args)
    {
        $result = parent::createBrowserSettings($args->toArray());
        return new CreateBrowserSettingsResponse($result->toArray());
    }
}
