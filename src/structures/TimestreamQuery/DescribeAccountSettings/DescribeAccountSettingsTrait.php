<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeAccountSettings;

trait DescribeAccountSettingsTrait
{
    /**
     * @param DescribeAccountSettingsRequest $args
     * @return DescribeAccountSettingsResponse
     */
    public function describeAccountSettings(DescribeAccountSettingsRequest $args)
    {
        $result = parent::describeAccountSettings($args->toArray());
        return new DescribeAccountSettingsResponse($result->toArray());
    }
}
