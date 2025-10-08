<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeNodeConfigurationOptions;

trait DescribeNodeConfigurationOptionsTrait
{
    /**
     * @param DescribeNodeConfigurationOptionsRequest $args
     * @return DescribeNodeConfigurationOptionsResponse
     */
    public function describeNodeConfigurationOptions(DescribeNodeConfigurationOptionsRequest $args)
    {
        $result = parent::describeNodeConfigurationOptions($args->toArray());
        return new DescribeNodeConfigurationOptionsResponse($result->toArray());
    }
}
