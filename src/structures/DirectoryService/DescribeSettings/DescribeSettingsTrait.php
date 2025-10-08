<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeSettings;

trait DescribeSettingsTrait
{
    /**
     * @param DescribeSettingsRequest $args
     * @return DescribeSettingsResponse
     */
    public function describeSettings(DescribeSettingsRequest $args)
    {
        $result = parent::describeSettings($args->toArray());
        return new DescribeSettingsResponse($result->toArray());
    }
}
