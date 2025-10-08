<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeGlobalTableSettings;

trait DescribeGlobalTableSettingsTrait
{
    /**
     * @param DescribeGlobalTableSettingsRequest $args
     * @return DescribeGlobalTableSettingsResponse
     */
    public function describeGlobalTableSettings(DescribeGlobalTableSettingsRequest $args)
    {
        $result = parent::describeGlobalTableSettings($args->toArray());
        return new DescribeGlobalTableSettingsResponse($result->toArray());
    }
}
