<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes;

trait DescribeInstanceRefreshesTrait
{
    /**
     * @param DescribeInstanceRefreshesRequest $args
     * @return DescribeInstanceRefreshesResponse
     */
    public function describeInstanceRefreshes(DescribeInstanceRefreshesRequest $args)
    {
        $result = parent::describeInstanceRefreshes($args->toArray());
        return new DescribeInstanceRefreshesResponse($result->toArray());
    }
}
