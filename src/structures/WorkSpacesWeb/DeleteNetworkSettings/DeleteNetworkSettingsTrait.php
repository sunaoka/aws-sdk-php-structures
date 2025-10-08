<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DeleteNetworkSettings;

trait DeleteNetworkSettingsTrait
{
    /**
     * @param DeleteNetworkSettingsRequest $args
     * @return DeleteNetworkSettingsResponse
     */
    public function deleteNetworkSettings(DeleteNetworkSettingsRequest $args)
    {
        $result = parent::deleteNetworkSettings($args->toArray());
        return new DeleteNetworkSettingsResponse($result->toArray());
    }
}
