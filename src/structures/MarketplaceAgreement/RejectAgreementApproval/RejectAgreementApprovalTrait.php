<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\RejectAgreementApproval;

trait RejectAgreementApprovalTrait
{
    /**
     * @param RejectAgreementApprovalRequest $args
     * @return RejectAgreementApprovalResponse
     */
    public function rejectAgreementApproval(RejectAgreementApprovalRequest $args)
    {
        $result = parent::rejectAgreementApproval($args->toArray());
        return new RejectAgreementApprovalResponse($result->toArray());
    }
}
