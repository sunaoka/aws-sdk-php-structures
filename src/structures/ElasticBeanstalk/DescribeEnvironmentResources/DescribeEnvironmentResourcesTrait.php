<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentResources;

trait DescribeEnvironmentResourcesTrait
{
    /**
     * @param DescribeEnvironmentResourcesRequest $args
     * @return DescribeEnvironmentResourcesResponse
     */
    public function describeEnvironmentResources(DescribeEnvironmentResourcesRequest $args)
    {
        $result = parent::describeEnvironmentResources($args->toArray());
        return new DescribeEnvironmentResourcesResponse($result->toArray());
    }
}
