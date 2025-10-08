<?php

namespace Sunaoka\Aws\Structures\Connect\GetTrafficDistribution;

trait GetTrafficDistributionTrait
{
    /**
     * @param GetTrafficDistributionRequest $args
     * @return GetTrafficDistributionResponse
     */
    public function getTrafficDistribution(GetTrafficDistributionRequest $args)
    {
        $result = parent::getTrafficDistribution($args->toArray());
        return new GetTrafficDistributionResponse($result->toArray());
    }
}
