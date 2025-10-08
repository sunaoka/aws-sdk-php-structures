<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeRegionSettings;

trait DescribeRegionSettingsTrait
{
    /**
     * @param DescribeRegionSettingsRequest $args
     * @return DescribeRegionSettingsResponse
     */
    public function describeRegionSettings(DescribeRegionSettingsRequest $args)
    {
        $result = parent::describeRegionSettings($args->toArray());
        return new DescribeRegionSettingsResponse($result->toArray());
    }
}
