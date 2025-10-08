<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeTrafficSources;

trait DescribeTrafficSourcesTrait
{
    /**
     * @param DescribeTrafficSourcesRequest $args
     * @return DescribeTrafficSourcesResponse
     */
    public function describeTrafficSources(DescribeTrafficSourcesRequest $args)
    {
        $result = parent::describeTrafficSources($args->toArray());
        return new DescribeTrafficSourcesResponse($result->toArray());
    }
}
