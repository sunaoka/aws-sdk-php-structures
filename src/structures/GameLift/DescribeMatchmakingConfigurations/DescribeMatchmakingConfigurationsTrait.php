<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeMatchmakingConfigurations;

trait DescribeMatchmakingConfigurationsTrait
{
    /**
     * @param DescribeMatchmakingConfigurationsRequest $args
     * @return DescribeMatchmakingConfigurationsResponse
     */
    public function describeMatchmakingConfigurations(DescribeMatchmakingConfigurationsRequest $args)
    {
        $result = parent::describeMatchmakingConfigurations($args->toArray());
        return new DescribeMatchmakingConfigurationsResponse($result->toArray());
    }
}
