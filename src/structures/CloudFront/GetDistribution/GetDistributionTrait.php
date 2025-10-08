<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistribution;

trait GetDistributionTrait
{
    /**
     * @param GetDistributionRequest $args
     * @return GetDistributionResponse
     */
    public function getDistribution(GetDistributionRequest $args)
    {
        $result = parent::getDistribution($args->toArray());
        return new GetDistributionResponse($result->toArray());
    }
}
