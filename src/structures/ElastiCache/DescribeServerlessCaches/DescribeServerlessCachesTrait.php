<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeServerlessCaches;

trait DescribeServerlessCachesTrait
{
    /**
     * @param DescribeServerlessCachesRequest $args
     * @return DescribeServerlessCachesResponse
     */
    public function describeServerlessCaches(DescribeServerlessCachesRequest $args)
    {
        $result = parent::describeServerlessCaches($args->toArray());
        return new DescribeServerlessCachesResponse($result->toArray());
    }
}
