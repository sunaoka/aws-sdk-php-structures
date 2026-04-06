<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeProxyConfiguration;

trait DescribeProxyConfigurationTrait
{
    /**
     * @param DescribeProxyConfigurationRequest $args
     * @return DescribeProxyConfigurationResponse
     */
    public function describeProxyConfiguration(DescribeProxyConfigurationRequest $args)
    {
        $result = parent::describeProxyConfiguration($args->toArray());
        return new DescribeProxyConfigurationResponse($result->toArray());
    }
}
