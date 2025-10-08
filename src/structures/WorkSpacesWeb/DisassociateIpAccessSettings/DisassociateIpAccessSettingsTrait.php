<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DisassociateIpAccessSettings;

trait DisassociateIpAccessSettingsTrait
{
    /**
     * @param DisassociateIpAccessSettingsRequest $args
     * @return DisassociateIpAccessSettingsResponse
     */
    public function disassociateIpAccessSettings(DisassociateIpAccessSettingsRequest $args)
    {
        $result = parent::disassociateIpAccessSettings($args->toArray());
        return new DisassociateIpAccessSettingsResponse($result->toArray());
    }
}
