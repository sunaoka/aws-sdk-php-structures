<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DisassociateBrowserSettings;

trait DisassociateBrowserSettingsTrait
{
    /**
     * @param DisassociateBrowserSettingsRequest $args
     * @return DisassociateBrowserSettingsResponse
     */
    public function disassociateBrowserSettings(DisassociateBrowserSettingsRequest $args)
    {
        $result = parent::disassociateBrowserSettings($args->toArray());
        return new DisassociateBrowserSettingsResponse($result->toArray());
    }
}
