<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementContacts;

trait GetAgreementContactsTrait
{
    /**
     * @param GetAgreementContactsRequest $args
     * @return GetAgreementContactsResponse
     */
    public function getAgreementContacts(GetAgreementContactsRequest $args)
    {
        $result = parent::getAgreementContacts($args->toArray());
        return new GetAgreementContactsResponse($result->toArray());
    }
}
