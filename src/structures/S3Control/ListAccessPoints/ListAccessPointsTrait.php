<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessPoints;

trait ListAccessPointsTrait
{
    /**
     * @param ListAccessPointsRequest $args
     * @return ListAccessPointsResponse
     */
    public function listAccessPoints(ListAccessPointsRequest $args)
    {
        $result = parent::listAccessPoints($args->toArray());
        return new ListAccessPointsResponse($result->toArray());
    }
}
