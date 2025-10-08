<?php

namespace Sunaoka\Aws\Structures\BackupGateway\UpdateGatewayInformation;

trait UpdateGatewayInformationTrait
{
    /**
     * @param UpdateGatewayInformationRequest $args
     * @return UpdateGatewayInformationResponse
     */
    public function updateGatewayInformation(UpdateGatewayInformationRequest $args)
    {
        $result = parent::updateGatewayInformation($args->toArray());
        return new UpdateGatewayInformationResponse($result->toArray());
    }
}
