<?php

namespace Sunaoka\Aws\Structures\WorkLink\DescribeCompanyNetworkConfiguration;

trait DescribeCompanyNetworkConfigurationTrait
{
    /**
     * @param DescribeCompanyNetworkConfigurationRequest $args
     * @return DescribeCompanyNetworkConfigurationResponse
     */
    public function describeCompanyNetworkConfiguration(DescribeCompanyNetworkConfigurationRequest $args)
    {
        $result = parent::describeCompanyNetworkConfiguration($args->toArray());
        return new DescribeCompanyNetworkConfigurationResponse($result->toArray());
    }
}
