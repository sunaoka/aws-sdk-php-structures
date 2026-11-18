<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementApprovals;

trait ListAgreementApprovalsTrait
{
    /**
     * @param ListAgreementApprovalsRequest $args
     * @return ListAgreementApprovalsResponse
     */
    public function listAgreementApprovals(ListAgreementApprovalsRequest $args)
    {
        $result = parent::listAgreementApprovals($args->toArray());
        return new ListAgreementApprovalsResponse($result->toArray());
    }
}
