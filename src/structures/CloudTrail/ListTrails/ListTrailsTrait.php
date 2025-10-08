<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListTrails;

trait ListTrailsTrait
{
    /**
     * @param ListTrailsRequest $args
     * @return ListTrailsResponse
     */
    public function listTrails(ListTrailsRequest $args)
    {
        $result = parent::listTrails($args->toArray());
        return new ListTrailsResponse($result->toArray());
    }
}
