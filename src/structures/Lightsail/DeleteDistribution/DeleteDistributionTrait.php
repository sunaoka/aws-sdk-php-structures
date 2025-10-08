<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteDistribution;

trait DeleteDistributionTrait
{
    /**
     * @param DeleteDistributionRequest $args
     * @return DeleteDistributionResponse
     */
    public function deleteDistribution(DeleteDistributionRequest $args)
    {
        $result = parent::deleteDistribution($args->toArray());
        return new DeleteDistributionResponse($result->toArray());
    }
}
