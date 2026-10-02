<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\GetWebAccountSettings;

trait GetWebAccountSettingsTrait
{
    /**
     * @param GetWebAccountSettingsRequest $args
     * @return GetWebAccountSettingsResponse
     */
    public function getWebAccountSettings(GetWebAccountSettingsRequest $args)
    {
        $result = parent::getWebAccountSettings($args->toArray());
        return new GetWebAccountSettingsResponse($result->toArray());
    }
}
