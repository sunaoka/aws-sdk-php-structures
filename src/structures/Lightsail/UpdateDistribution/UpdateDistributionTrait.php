<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateDistribution;

trait UpdateDistributionTrait
{
    /**
     * @param UpdateDistributionRequest $args
     * @return UpdateDistributionResponse
     */
    public function updateDistribution(UpdateDistributionRequest $args)
    {
        $result = parent::updateDistribution($args->toArray());
        return new UpdateDistributionResponse($result->toArray());
    }
}
