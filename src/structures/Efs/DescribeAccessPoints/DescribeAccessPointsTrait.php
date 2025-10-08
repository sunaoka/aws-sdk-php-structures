<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeAccessPoints;

trait DescribeAccessPointsTrait
{
    /**
     * @param DescribeAccessPointsRequest $args
     * @return DescribeAccessPointsResponse
     */
    public function describeAccessPoints(DescribeAccessPointsRequest $args)
    {
        $result = parent::describeAccessPoints($args->toArray());
        return new DescribeAccessPointsResponse($result->toArray());
    }
}
