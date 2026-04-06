<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementPaymentRequests;

trait ListAgreementPaymentRequestsTrait
{
    /**
     * @param ListAgreementPaymentRequestsRequest $args
     * @return ListAgreementPaymentRequestsResponse
     */
    public function listAgreementPaymentRequests(ListAgreementPaymentRequestsRequest $args)
    {
        $result = parent::listAgreementPaymentRequests($args->toArray());
        return new ListAgreementPaymentRequestsResponse($result->toArray());
    }
}
