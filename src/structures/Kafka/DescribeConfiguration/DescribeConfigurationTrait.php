<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeConfiguration;

trait DescribeConfigurationTrait
{
    /**
     * @param DescribeConfigurationRequest $args
     * @return DescribeConfigurationResponse
     */
    public function describeConfiguration(DescribeConfigurationRequest $args)
    {
        $result = parent::describeConfiguration($args->toArray());
        return new DescribeConfigurationResponse($result->toArray());
    }
}
