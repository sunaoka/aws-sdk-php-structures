<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateStreamingDistribution;

trait UpdateStreamingDistributionTrait
{
    /**
     * @param UpdateStreamingDistributionRequest $args
     * @return UpdateStreamingDistributionResponse
     */
    public function updateStreamingDistribution(UpdateStreamingDistributionRequest $args)
    {
        $result = parent::updateStreamingDistribution($args->toArray());
        return new UpdateStreamingDistributionResponse($result->toArray());
    }
}
