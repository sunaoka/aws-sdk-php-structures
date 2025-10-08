<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateTrafficDistribution;

trait UpdateTrafficDistributionTrait
{
    /**
     * @param UpdateTrafficDistributionRequest $args
     * @return UpdateTrafficDistributionResponse
     */
    public function updateTrafficDistribution(UpdateTrafficDistributionRequest $args)
    {
        $result = parent::updateTrafficDistribution($args->toArray());
        return new UpdateTrafficDistributionResponse($result->toArray());
    }
}
