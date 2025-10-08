<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateIpAccessSettings;

trait UpdateIpAccessSettingsTrait
{
    /**
     * @param UpdateIpAccessSettingsRequest $args
     * @return UpdateIpAccessSettingsResponse
     */
    public function updateIpAccessSettings(UpdateIpAccessSettingsRequest $args)
    {
        $result = parent::updateIpAccessSettings($args->toArray());
        return new UpdateIpAccessSettingsResponse($result->toArray());
    }
}
