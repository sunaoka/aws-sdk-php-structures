<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DisassociateDataProtectionSettings;

trait DisassociateDataProtectionSettingsTrait
{
    /**
     * @param DisassociateDataProtectionSettingsRequest $args
     * @return DisassociateDataProtectionSettingsResponse
     */
    public function disassociateDataProtectionSettings(DisassociateDataProtectionSettingsRequest $args)
    {
        $result = parent::disassociateDataProtectionSettings($args->toArray());
        return new DisassociateDataProtectionSettingsResponse($result->toArray());
    }
}
