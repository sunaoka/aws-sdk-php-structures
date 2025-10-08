<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateBrowserSettings;

trait AssociateBrowserSettingsTrait
{
    /**
     * @param AssociateBrowserSettingsRequest $args
     * @return AssociateBrowserSettingsResponse
     */
    public function associateBrowserSettings(AssociateBrowserSettingsRequest $args)
    {
        $result = parent::associateBrowserSettings($args->toArray());
        return new AssociateBrowserSettingsResponse($result->toArray());
    }
}
