<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeComponentConfiguration;

trait DescribeComponentConfigurationTrait
{
    /**
     * @param DescribeComponentConfigurationRequest $args
     * @return DescribeComponentConfigurationResponse
     */
    public function describeComponentConfiguration(DescribeComponentConfigurationRequest $args)
    {
        $result = parent::describeComponentConfiguration($args->toArray());
        return new DescribeComponentConfigurationResponse($result->toArray());
    }
}
