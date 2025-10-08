<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeRouterConfiguration;

trait DescribeRouterConfigurationTrait
{
    /**
     * @param DescribeRouterConfigurationRequest $args
     * @return DescribeRouterConfigurationResponse
     */
    public function describeRouterConfiguration(DescribeRouterConfigurationRequest $args)
    {
        $result = parent::describeRouterConfiguration($args->toArray());
        return new DescribeRouterConfigurationResponse($result->toArray());
    }
}
