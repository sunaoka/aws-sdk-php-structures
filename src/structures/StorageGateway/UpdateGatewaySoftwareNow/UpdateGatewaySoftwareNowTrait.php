<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateGatewaySoftwareNow;

trait UpdateGatewaySoftwareNowTrait
{
    /**
     * @param UpdateGatewaySoftwareNowRequest $args
     * @return UpdateGatewaySoftwareNowResponse
     */
    public function updateGatewaySoftwareNow(UpdateGatewaySoftwareNowRequest $args)
    {
        $result = parent::updateGatewaySoftwareNow($args->toArray());
        return new UpdateGatewaySoftwareNowResponse($result->toArray());
    }
}
