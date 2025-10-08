<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DescribeTrails;

trait DescribeTrailsTrait
{
    /**
     * @param DescribeTrailsRequest $args
     * @return DescribeTrailsResponse
     */
    public function describeTrails(DescribeTrailsRequest $args)
    {
        $result = parent::describeTrails($args->toArray());
        return new DescribeTrailsResponse($result->toArray());
    }
}
