<?php

namespace Sunaoka\Aws\Structures\Connect\GetCrossRegionRouting;

trait GetCrossRegionRoutingTrait
{
    /**
     * @param GetCrossRegionRoutingRequest $args
     * @return GetCrossRegionRoutingResponse
     */
    public function getCrossRegionRouting(GetCrossRegionRoutingRequest $args)
    {
        $result = parent::getCrossRegionRouting($args->toArray());
        return new GetCrossRegionRoutingResponse($result->toArray());
    }
}
