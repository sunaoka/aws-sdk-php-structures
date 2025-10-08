<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceProperties;

trait DescribeInstancePropertiesTrait
{
    /**
     * @param DescribeInstancePropertiesRequest $args
     * @return DescribeInstancePropertiesResponse
     */
    public function describeInstanceProperties(DescribeInstancePropertiesRequest $args)
    {
        $result = parent::describeInstanceProperties($args->toArray());
        return new DescribeInstancePropertiesResponse($result->toArray());
    }
}
