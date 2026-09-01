<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateCrossRegionRouting;

trait UpdateCrossRegionRoutingTrait
{
    /**
     * @param UpdateCrossRegionRoutingRequest $args
     * @return UpdateCrossRegionRoutingResponse
     */
    public function updateCrossRegionRouting(UpdateCrossRegionRoutingRequest $args)
    {
        $result = parent::updateCrossRegionRouting($args->toArray());
        return new UpdateCrossRegionRoutingResponse($result->toArray());
    }
}
