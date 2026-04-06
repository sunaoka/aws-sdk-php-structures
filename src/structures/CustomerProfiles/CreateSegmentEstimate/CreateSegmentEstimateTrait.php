<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentEstimate;

trait CreateSegmentEstimateTrait
{
    /**
     * @param CreateSegmentEstimateRequest $args
     * @return CreateSegmentEstimateResponse
     */
    public function createSegmentEstimate(CreateSegmentEstimateRequest $args)
    {
        $result = parent::createSegmentEstimate($args->toArray());
        return new CreateSegmentEstimateResponse($result->toArray());
    }
}
