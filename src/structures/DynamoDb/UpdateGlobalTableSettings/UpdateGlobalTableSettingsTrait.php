<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateGlobalTableSettings;

trait UpdateGlobalTableSettingsTrait
{
    /**
     * @param UpdateGlobalTableSettingsRequest $args
     * @return UpdateGlobalTableSettingsResponse
     */
    public function updateGlobalTableSettings(UpdateGlobalTableSettingsRequest $args)
    {
        $result = parent::updateGlobalTableSettings($args->toArray());
        return new UpdateGlobalTableSettingsResponse($result->toArray());
    }
}
