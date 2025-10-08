<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessionDetails;

trait DescribeGameSessionDetailsTrait
{
    /**
     * @param DescribeGameSessionDetailsRequest $args
     * @return DescribeGameSessionDetailsResponse
     */
    public function describeGameSessionDetails(DescribeGameSessionDetailsRequest $args)
    {
        $result = parent::describeGameSessionDetails($args->toArray());
        return new DescribeGameSessionDetailsResponse($result->toArray());
    }
}
