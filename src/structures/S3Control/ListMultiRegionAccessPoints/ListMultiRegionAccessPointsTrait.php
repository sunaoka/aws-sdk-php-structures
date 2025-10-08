<?php

namespace Sunaoka\Aws\Structures\S3Control\ListMultiRegionAccessPoints;

trait ListMultiRegionAccessPointsTrait
{
    /**
     * @param ListMultiRegionAccessPointsRequest $args
     * @return ListMultiRegionAccessPointsResponse
     */
    public function listMultiRegionAccessPoints(ListMultiRegionAccessPointsRequest $args)
    {
        $result = parent::listMultiRegionAccessPoints($args->toArray());
        return new ListMultiRegionAccessPointsResponse($result->toArray());
    }
}
