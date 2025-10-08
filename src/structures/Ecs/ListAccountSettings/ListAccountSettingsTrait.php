<?php

namespace Sunaoka\Aws\Structures\Ecs\ListAccountSettings;

trait ListAccountSettingsTrait
{
    /**
     * @param ListAccountSettingsRequest $args
     * @return ListAccountSettingsResponse
     */
    public function listAccountSettings(ListAccountSettingsRequest $args)
    {
        $result = parent::listAccountSettings($args->toArray());
        return new ListAccountSettingsResponse($result->toArray());
    }
}
