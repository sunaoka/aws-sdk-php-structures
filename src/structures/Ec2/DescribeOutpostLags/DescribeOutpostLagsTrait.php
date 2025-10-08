<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeOutpostLags;

trait DescribeOutpostLagsTrait
{
    /**
     * @param DescribeOutpostLagsRequest $args
     * @return DescribeOutpostLagsResponse
     */
    public function describeOutpostLags(DescribeOutpostLagsRequest $args)
    {
        $result = parent::describeOutpostLags($args->toArray());
        return new DescribeOutpostLagsResponse($result->toArray());
    }
}
