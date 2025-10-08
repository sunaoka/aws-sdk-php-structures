<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetPortSettings;

trait DescribeFleetPortSettingsTrait
{
    /**
     * @param DescribeFleetPortSettingsRequest $args
     * @return DescribeFleetPortSettingsResponse
     */
    public function describeFleetPortSettings(DescribeFleetPortSettingsRequest $args)
    {
        $result = parent::describeFleetPortSettings($args->toArray());
        return new DescribeFleetPortSettingsResponse($result->toArray());
    }
}
