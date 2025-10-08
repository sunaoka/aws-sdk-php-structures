<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeConfigurationOptions;

trait DescribeConfigurationOptionsTrait
{
    /**
     * @param DescribeConfigurationOptionsRequest $args
     * @return DescribeConfigurationOptionsResponse
     */
    public function describeConfigurationOptions(DescribeConfigurationOptionsRequest $args)
    {
        $result = parent::describeConfigurationOptions($args->toArray());
        return new DescribeConfigurationOptionsResponse($result->toArray());
    }
}
