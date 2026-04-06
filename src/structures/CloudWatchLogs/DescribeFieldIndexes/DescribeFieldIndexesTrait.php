<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeFieldIndexes;

trait DescribeFieldIndexesTrait
{
    /**
     * @param DescribeFieldIndexesRequest $args
     * @return DescribeFieldIndexesResponse
     */
    public function describeFieldIndexes(DescribeFieldIndexesRequest $args)
    {
        $result = parent::describeFieldIndexes($args->toArray());
        return new DescribeFieldIndexesResponse($result->toArray());
    }
}
