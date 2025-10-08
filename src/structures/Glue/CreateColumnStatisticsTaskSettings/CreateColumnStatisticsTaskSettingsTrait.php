<?php

namespace Sunaoka\Aws\Structures\Glue\CreateColumnStatisticsTaskSettings;

trait CreateColumnStatisticsTaskSettingsTrait
{
    /**
     * @param CreateColumnStatisticsTaskSettingsRequest $args
     * @return CreateColumnStatisticsTaskSettingsResponse
     */
    public function createColumnStatisticsTaskSettings(CreateColumnStatisticsTaskSettingsRequest $args)
    {
        $result = parent::createColumnStatisticsTaskSettings($args->toArray());
        return new CreateColumnStatisticsTaskSettingsResponse($result->toArray());
    }
}
