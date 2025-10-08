<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeSessions;

trait DescribeSessionsTrait
{
    /**
     * @param DescribeSessionsRequest $args
     * @return DescribeSessionsResponse
     */
    public function describeSessions(DescribeSessionsRequest $args)
    {
        $result = parent::describeSessions($args->toArray());
        return new DescribeSessionsResponse($result->toArray());
    }
}
