<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetAccountSettings;

trait GetAccountSettingsTrait
{
    /**
     * @param GetAccountSettingsRequest $args
     * @return GetAccountSettingsResponse
     */
    public function getAccountSettings(GetAccountSettingsRequest $args)
    {
        $result = parent::getAccountSettings($args->toArray());
        return new GetAccountSettingsResponse($result->toArray());
    }
}
