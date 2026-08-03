<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxySettings;

trait UpdateProxySettingsTrait
{
    /**
     * @param UpdateProxySettingsRequest $args
     * @return UpdateProxySettingsResponse
     */
    public function updateProxySettings(UpdateProxySettingsRequest $args)
    {
        $result = parent::updateProxySettings($args->toArray());
        return new UpdateProxySettingsResponse($result->toArray());
    }
}
