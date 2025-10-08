<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetStreamingDistribution;

trait GetStreamingDistributionTrait
{
    /**
     * @param GetStreamingDistributionRequest $args
     * @return GetStreamingDistributionResponse
     */
    public function getStreamingDistribution(GetStreamingDistributionRequest $args)
    {
        $result = parent::getStreamingDistribution($args->toArray());
        return new GetStreamingDistributionResponse($result->toArray());
    }
}
