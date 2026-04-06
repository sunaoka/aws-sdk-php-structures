<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteColumnStatisticsTaskSettings;

trait DeleteColumnStatisticsTaskSettingsTrait
{
    /**
     * @param DeleteColumnStatisticsTaskSettingsRequest $args
     * @return DeleteColumnStatisticsTaskSettingsResponse
     */
    public function deleteColumnStatisticsTaskSettings(DeleteColumnStatisticsTaskSettingsRequest $args)
    {
        $result = parent::deleteColumnStatisticsTaskSettings($args->toArray());
        return new DeleteColumnStatisticsTaskSettingsResponse($result->toArray());
    }
}
