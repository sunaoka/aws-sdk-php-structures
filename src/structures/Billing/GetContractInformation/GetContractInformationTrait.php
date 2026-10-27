<?php

namespace Sunaoka\Aws\Structures\Billing\GetContractInformation;

trait GetContractInformationTrait
{
    /**
     * @param GetContractInformationRequest $args
     * @return GetContractInformationResponse
     */
    public function getContractInformation(GetContractInformationRequest $args)
    {
        $result = parent::getContractInformation($args->toArray());
        return new GetContractInformationResponse($result->toArray());
    }
}
