<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeEdgeConfiguration;

trait DescribeEdgeConfigurationTrait
{
    /**
     * @param DescribeEdgeConfigurationRequest $args
     * @return DescribeEdgeConfigurationResponse
     */
    public function describeEdgeConfiguration(DescribeEdgeConfigurationRequest $args)
    {
        $result = parent::describeEdgeConfiguration($args->toArray());
        return new DescribeEdgeConfigurationResponse($result->toArray());
    }
}
