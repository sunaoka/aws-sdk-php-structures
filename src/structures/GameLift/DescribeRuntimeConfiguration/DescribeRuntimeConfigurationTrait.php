<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeRuntimeConfiguration;

trait DescribeRuntimeConfigurationTrait
{
    /**
     * @param DescribeRuntimeConfigurationRequest $args
     * @return DescribeRuntimeConfigurationResponse
     */
    public function describeRuntimeConfiguration(DescribeRuntimeConfigurationRequest $args)
    {
        $result = parent::describeRuntimeConfiguration($args->toArray());
        return new DescribeRuntimeConfigurationResponse($result->toArray());
    }
}
