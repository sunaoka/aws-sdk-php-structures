<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribePlayerSessions;

trait DescribePlayerSessionsTrait
{
    /**
     * @param DescribePlayerSessionsRequest $args
     * @return DescribePlayerSessionsResponse
     */
    public function describePlayerSessions(DescribePlayerSessionsRequest $args)
    {
        $result = parent::describePlayerSessions($args->toArray());
        return new DescribePlayerSessionsResponse($result->toArray());
    }
}
