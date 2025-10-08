<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeTimeToLive;

trait DescribeTimeToLiveTrait
{
    /**
     * @param DescribeTimeToLiveRequest $args
     * @return DescribeTimeToLiveResponse
     */
    public function describeTimeToLive(DescribeTimeToLiveRequest $args)
    {
        $result = parent::describeTimeToLive($args->toArray());
        return new DescribeTimeToLiveResponse($result->toArray());
    }
}
