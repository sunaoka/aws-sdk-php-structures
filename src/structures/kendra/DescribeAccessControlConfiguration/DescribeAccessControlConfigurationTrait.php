<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeAccessControlConfiguration;

trait DescribeAccessControlConfigurationTrait
{
    /**
     * @param DescribeAccessControlConfigurationRequest $args
     * @return DescribeAccessControlConfigurationResponse
     */
    public function describeAccessControlConfiguration(DescribeAccessControlConfigurationRequest $args)
    {
        $result = parent::describeAccessControlConfiguration($args->toArray());
        return new DescribeAccessControlConfigurationResponse($result->toArray());
    }
}
