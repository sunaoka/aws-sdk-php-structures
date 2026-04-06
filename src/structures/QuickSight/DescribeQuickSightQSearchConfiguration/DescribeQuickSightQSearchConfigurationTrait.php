<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeQuickSightQSearchConfiguration;

trait DescribeQuickSightQSearchConfigurationTrait
{
    /**
     * @param DescribeQuickSightQSearchConfigurationRequest $args
     * @return DescribeQuickSightQSearchConfigurationResponse
     */
    public function describeQuickSightQSearchConfiguration(DescribeQuickSightQSearchConfigurationRequest $args)
    {
        $result = parent::describeQuickSightQSearchConfiguration($args->toArray());
        return new DescribeQuickSightQSearchConfigurationResponse($result->toArray());
    }
}
