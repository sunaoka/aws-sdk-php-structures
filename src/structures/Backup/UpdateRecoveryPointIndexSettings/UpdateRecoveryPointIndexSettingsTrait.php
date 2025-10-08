<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRecoveryPointIndexSettings;

trait UpdateRecoveryPointIndexSettingsTrait
{
    /**
     * @param UpdateRecoveryPointIndexSettingsRequest $args
     * @return UpdateRecoveryPointIndexSettingsResponse
     */
    public function updateRecoveryPointIndexSettings(UpdateRecoveryPointIndexSettingsRequest $args)
    {
        $result = parent::updateRecoveryPointIndexSettings($args->toArray());
        return new UpdateRecoveryPointIndexSettingsResponse($result->toArray());
    }
}
