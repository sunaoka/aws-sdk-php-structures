<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDistribution;

trait CreateDistributionTrait
{
    /**
     * @param CreateDistributionRequest $args
     * @return CreateDistributionResponse
     */
    public function createDistribution(CreateDistributionRequest $args)
    {
        $result = parent::createDistribution($args->toArray());
        return new CreateDistributionResponse($result->toArray());
    }
}
