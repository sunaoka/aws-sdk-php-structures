<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DeleteIpAccessSettings;

trait DeleteIpAccessSettingsTrait
{
    /**
     * @param DeleteIpAccessSettingsRequest $args
     * @return DeleteIpAccessSettingsResponse
     */
    public function deleteIpAccessSettings(DeleteIpAccessSettingsRequest $args)
    {
        $result = parent::deleteIpAccessSettings($args->toArray());
        return new DeleteIpAccessSettingsResponse($result->toArray());
    }
}
