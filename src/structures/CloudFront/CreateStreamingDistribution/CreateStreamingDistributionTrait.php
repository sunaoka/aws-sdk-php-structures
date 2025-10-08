<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateStreamingDistribution;

trait CreateStreamingDistributionTrait
{
    /**
     * @param CreateStreamingDistributionRequest $args
     * @return CreateStreamingDistributionResponse
     */
    public function createStreamingDistribution(CreateStreamingDistributionRequest $args)
    {
        $result = parent::createStreamingDistribution($args->toArray());
        return new CreateStreamingDistributionResponse($result->toArray());
    }
}
