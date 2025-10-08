<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentEstimate;

trait GetSegmentEstimateTrait
{
    /**
     * @param GetSegmentEstimateRequest $args
     * @return GetSegmentEstimateResponse
     */
    public function getSegmentEstimate(GetSegmentEstimateRequest $args)
    {
        $result = parent::getSegmentEstimate($args->toArray());
        return new GetSegmentEstimateResponse($result->toArray());
    }
}
