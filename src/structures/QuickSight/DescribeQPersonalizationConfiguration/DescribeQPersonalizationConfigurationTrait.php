<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeQPersonalizationConfiguration;

trait DescribeQPersonalizationConfigurationTrait
{
    /**
     * @param DescribeQPersonalizationConfigurationRequest $args
     * @return DescribeQPersonalizationConfigurationResponse
     */
    public function describeQPersonalizationConfiguration(DescribeQPersonalizationConfigurationRequest $args)
    {
        $result = parent::describeQPersonalizationConfiguration($args->toArray());
        return new DescribeQPersonalizationConfigurationResponse($result->toArray());
    }
}
