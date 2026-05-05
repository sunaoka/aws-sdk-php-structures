<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CreateAgreementRequest;

trait CreateAgreementRequestTrait
{
    /**
     * @param CreateAgreementRequestRequest $args
     * @return CreateAgreementRequestResponse
     */
    public function createAgreementRequest(CreateAgreementRequestRequest $args)
    {
        $result = parent::createAgreementRequest($args->toArray());
        return new CreateAgreementRequestResponse($result->toArray());
    }
}
