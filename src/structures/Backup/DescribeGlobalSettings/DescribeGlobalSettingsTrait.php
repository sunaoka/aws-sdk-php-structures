<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeGlobalSettings;

trait DescribeGlobalSettingsTrait
{
    /**
     * @param DescribeGlobalSettingsRequest $args
     * @return DescribeGlobalSettingsResponse
     */
    public function describeGlobalSettings(DescribeGlobalSettingsRequest $args)
    {
        $result = parent::describeGlobalSettings($args->toArray());
        return new DescribeGlobalSettingsResponse($result->toArray());
    }
}
