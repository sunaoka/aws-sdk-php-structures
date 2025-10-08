<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSegmentDestination;

trait GetTraceSegmentDestinationTrait
{
    /**
     * @param GetTraceSegmentDestinationRequest $args
     * @return GetTraceSegmentDestinationResponse
     */
    public function getTraceSegmentDestination(GetTraceSegmentDestinationRequest $args)
    {
        $result = parent::getTraceSegmentDestination($args->toArray());
        return new GetTraceSegmentDestinationResponse($result->toArray());
    }
}
