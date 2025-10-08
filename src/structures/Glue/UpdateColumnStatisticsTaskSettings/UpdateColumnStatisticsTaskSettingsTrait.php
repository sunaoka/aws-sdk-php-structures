<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsTaskSettings;

trait UpdateColumnStatisticsTaskSettingsTrait
{
    /**
     * @param UpdateColumnStatisticsTaskSettingsRequest $args
     * @return UpdateColumnStatisticsTaskSettingsResponse
     */
    public function updateColumnStatisticsTaskSettings(UpdateColumnStatisticsTaskSettingsRequest $args)
    {
        $result = parent::updateColumnStatisticsTaskSettings($args->toArray());
        return new UpdateColumnStatisticsTaskSettingsResponse($result->toArray());
    }
}
