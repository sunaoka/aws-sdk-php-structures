<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeLifecycleConfiguration;

trait DescribeLifecycleConfigurationTrait
{
    /**
     * @param DescribeLifecycleConfigurationRequest $args
     * @return DescribeLifecycleConfigurationResponse
     */
    public function describeLifecycleConfiguration(DescribeLifecycleConfigurationRequest $args)
    {
        $result = parent::describeLifecycleConfiguration($args->toArray());
        return new DescribeLifecycleConfigurationResponse($result->toArray());
    }
}
