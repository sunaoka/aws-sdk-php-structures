<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeNetwork;

trait DescribeNetworkTrait
{
    /**
     * @param DescribeNetworkRequest $args
     * @return DescribeNetworkResponse
     */
    public function describeNetwork(DescribeNetworkRequest $args)
    {
        $result = parent::describeNetwork($args->toArray());
        return new DescribeNetworkResponse($result->toArray());
    }
}
