<?php

namespace Sunaoka\Aws\Structures\Billing\GetEnterpriseSupportContractDetails;

trait GetEnterpriseSupportContractDetailsTrait
{
    /**
     * @param GetEnterpriseSupportContractDetailsRequest $args
     * @return GetEnterpriseSupportContractDetailsResponse
     */
    public function getEnterpriseSupportContractDetails(GetEnterpriseSupportContractDetailsRequest $args)
    {
        $result = parent::getEnterpriseSupportContractDetails($args->toArray());
        return new GetEnterpriseSupportContractDetailsResponse($result->toArray());
    }
}
