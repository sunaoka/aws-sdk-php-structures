<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessions;

trait DescribeGameSessionsTrait
{
    /**
     * @param DescribeGameSessionsRequest $args
     * @return DescribeGameSessionsResponse
     */
    public function describeGameSessions(DescribeGameSessionsRequest $args)
    {
        $result = parent::describeGameSessions($args->toArray());
        return new DescribeGameSessionsResponse($result->toArray());
    }
}
