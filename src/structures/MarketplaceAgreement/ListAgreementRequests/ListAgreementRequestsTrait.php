<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementRequests;

trait ListAgreementRequestsTrait
{
    /**
     * @param ListAgreementRequestsRequest $args
     * @return ListAgreementRequestsResponse
     */
    public function listAgreementRequests(ListAgreementRequestsRequest $args)
    {
        $result = parent::listAgreementRequests($args->toArray());
        return new ListAgreementRequestsResponse($result->toArray());
    }
}
