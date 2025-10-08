<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListDataProtectionSettings;

trait ListDataProtectionSettingsTrait
{
    /**
     * @param ListDataProtectionSettingsRequest $args
     * @return ListDataProtectionSettingsResponse
     */
    public function listDataProtectionSettings(ListDataProtectionSettingsRequest $args)
    {
        $result = parent::listDataProtectionSettings($args->toArray());
        return new ListDataProtectionSettingsResponse($result->toArray());
    }
}
