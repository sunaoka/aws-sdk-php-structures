<?php

namespace Sunaoka\Aws\Structures\Account\GetAccountInformation;

trait GetAccountInformationTrait
{
    /**
     * @param GetAccountInformationRequest $args
     * @return GetAccountInformationResponse
     */
    public function getAccountInformation(GetAccountInformationRequest $args)
    {
        $result = parent::getAccountInformation($args->toArray());
        return new GetAccountInformationResponse($result->toArray());
    }
}
