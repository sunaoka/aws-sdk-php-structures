<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\UpdateNetworkSitePlan;

trait UpdateNetworkSitePlanTrait
{
    /**
     * @param UpdateNetworkSitePlanRequest $args
     * @return UpdateNetworkSitePlanResponse
     */
    public function updateNetworkSitePlan(UpdateNetworkSitePlanRequest $args)
    {
        $result = parent::updateNetworkSitePlan($args->toArray());
        return new UpdateNetworkSitePlanResponse($result->toArray());
    }
}
