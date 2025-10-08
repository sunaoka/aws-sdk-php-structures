<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpointSettings;

trait DescribeEndpointSettingsTrait
{
    /**
     * @param DescribeEndpointSettingsRequest $args
     * @return DescribeEndpointSettingsResponse
     */
    public function describeEndpointSettings(DescribeEndpointSettingsRequest $args)
    {
        $result = parent::describeEndpointSettings($args->toArray());
        return new DescribeEndpointSettingsResponse($result->toArray());
    }
}
