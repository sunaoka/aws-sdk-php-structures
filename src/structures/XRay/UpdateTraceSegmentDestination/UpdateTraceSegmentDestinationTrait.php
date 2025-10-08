<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateTraceSegmentDestination;

trait UpdateTraceSegmentDestinationTrait
{
    /**
     * @param UpdateTraceSegmentDestinationRequest $args
     * @return UpdateTraceSegmentDestinationResponse
     */
    public function updateTraceSegmentDestination(UpdateTraceSegmentDestinationRequest $args)
    {
        $result = parent::updateTraceSegmentDestination($args->toArray());
        return new UpdateTraceSegmentDestinationResponse($result->toArray());
    }
}
