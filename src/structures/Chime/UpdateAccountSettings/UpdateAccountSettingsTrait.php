<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateAccountSettings;

trait UpdateAccountSettingsTrait
{
    /**
     * @param UpdateAccountSettingsRequest $args
     * @return UpdateAccountSettingsResponse
     */
    public function updateAccountSettings(UpdateAccountSettingsRequest $args)
    {
        $result = parent::updateAccountSettings($args->toArray());
        return new UpdateAccountSettingsResponse($result->toArray());
    }
}
