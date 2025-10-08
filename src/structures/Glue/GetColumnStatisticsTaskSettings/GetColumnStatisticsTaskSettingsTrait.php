<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsTaskSettings;

trait GetColumnStatisticsTaskSettingsTrait
{
    /**
     * @param GetColumnStatisticsTaskSettingsRequest $args
     * @return GetColumnStatisticsTaskSettingsResponse
     */
    public function getColumnStatisticsTaskSettings(GetColumnStatisticsTaskSettingsRequest $args)
    {
        $result = parent::getColumnStatisticsTaskSettings($args->toArray());
        return new GetColumnStatisticsTaskSettingsResponse($result->toArray());
    }
}
