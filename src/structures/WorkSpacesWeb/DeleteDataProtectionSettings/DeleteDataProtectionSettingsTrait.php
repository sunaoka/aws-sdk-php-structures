<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DeleteDataProtectionSettings;

trait DeleteDataProtectionSettingsTrait
{
    /**
     * @param DeleteDataProtectionSettingsRequest $args
     * @return DeleteDataProtectionSettingsResponse
     */
    public function deleteDataProtectionSettings(DeleteDataProtectionSettingsRequest $args)
    {
        $result = parent::deleteDataProtectionSettings($args->toArray());
        return new DeleteDataProtectionSettingsResponse($result->toArray());
    }
}
