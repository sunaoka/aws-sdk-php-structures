<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DisassociateUserAccessLoggingSettings;

trait DisassociateUserAccessLoggingSettingsTrait
{
    /**
     * @param DisassociateUserAccessLoggingSettingsRequest $args
     * @return DisassociateUserAccessLoggingSettingsResponse
     */
    public function disassociateUserAccessLoggingSettings(DisassociateUserAccessLoggingSettingsRequest $args)
    {
        $result = parent::disassociateUserAccessLoggingSettings($args->toArray());
        return new DisassociateUserAccessLoggingSettingsResponse($result->toArray());
    }
}
