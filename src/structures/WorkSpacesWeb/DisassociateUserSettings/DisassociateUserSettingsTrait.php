<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DisassociateUserSettings;

trait DisassociateUserSettingsTrait
{
    /**
     * @param DisassociateUserSettingsRequest $args
     * @return DisassociateUserSettingsResponse
     */
    public function disassociateUserSettings(DisassociateUserSettingsRequest $args)
    {
        $result = parent::disassociateUserSettings($args->toArray());
        return new DisassociateUserSettingsResponse($result->toArray());
    }
}
