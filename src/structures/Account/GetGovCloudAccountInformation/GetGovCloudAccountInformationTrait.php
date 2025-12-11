<?php

namespace Sunaoka\Aws\Structures\Account\GetGovCloudAccountInformation;

trait GetGovCloudAccountInformationTrait
{
    /**
     * @param GetGovCloudAccountInformationRequest $args
     * @return GetGovCloudAccountInformationResponse
     */
    public function getGovCloudAccountInformation(GetGovCloudAccountInformationRequest $args)
    {
        $result = parent::getGovCloudAccountInformation($args->toArray());
        return new GetGovCloudAccountInformationResponse($result->toArray());
    }
}
