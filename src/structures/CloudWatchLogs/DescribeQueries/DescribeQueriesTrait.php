<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeQueries;

trait DescribeQueriesTrait
{
    /**
     * @param DescribeQueriesRequest $args
     * @return DescribeQueriesResponse
     */
    public function describeQueries(DescribeQueriesRequest $args)
    {
        $result = parent::describeQueries($args->toArray());
        return new DescribeQueriesResponse($result->toArray());
    }
}
