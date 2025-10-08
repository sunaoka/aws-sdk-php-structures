<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DescribePackagingConfiguration;

trait DescribePackagingConfigurationTrait
{
    /**
     * @param DescribePackagingConfigurationRequest $args
     * @return DescribePackagingConfigurationResponse
     */
    public function describePackagingConfiguration(DescribePackagingConfigurationRequest $args)
    {
        $result = parent::describePackagingConfiguration($args->toArray());
        return new DescribePackagingConfigurationResponse($result->toArray());
    }
}
