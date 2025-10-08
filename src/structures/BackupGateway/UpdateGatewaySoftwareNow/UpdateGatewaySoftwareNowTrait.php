<?php

namespace Sunaoka\Aws\Structures\BackupGateway\UpdateGatewaySoftwareNow;

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
