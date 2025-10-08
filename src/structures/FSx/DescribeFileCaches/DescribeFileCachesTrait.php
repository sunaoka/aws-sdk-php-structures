<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeFileCaches;

trait DescribeFileCachesTrait
{
    /**
     * @param DescribeFileCachesRequest $args
     * @return DescribeFileCachesResponse
     */
    public function describeFileCaches(DescribeFileCachesRequest $args)
    {
        $result = parent::describeFileCaches($args->toArray());
        return new DescribeFileCachesResponse($result->toArray());
    }
}
