<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListIpAccessSettings;

trait ListIpAccessSettingsTrait
{
    /**
     * @param ListIpAccessSettingsRequest $args
     * @return ListIpAccessSettingsResponse
     */
    public function listIpAccessSettings(ListIpAccessSettingsRequest $args)
    {
        $result = parent::listIpAccessSettings($args->toArray());
        return new ListIpAccessSettingsResponse($result->toArray());
    }
}
