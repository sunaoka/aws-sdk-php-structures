<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementCancellationRequests;

trait ListAgreementCancellationRequestsTrait
{
    /**
     * @param ListAgreementCancellationRequestsRequest $args
     * @return ListAgreementCancellationRequestsResponse
     */
    public function listAgreementCancellationRequests(ListAgreementCancellationRequestsRequest $args)
    {
        $result = parent::listAgreementCancellationRequests($args->toArray());
        return new ListAgreementCancellationRequestsResponse($result->toArray());
    }
}
