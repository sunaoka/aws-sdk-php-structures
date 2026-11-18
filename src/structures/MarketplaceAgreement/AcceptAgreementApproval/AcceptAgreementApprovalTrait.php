<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\AcceptAgreementApproval;

trait AcceptAgreementApprovalTrait
{
    /**
     * @param AcceptAgreementApprovalRequest $args
     * @return AcceptAgreementApprovalResponse
     */
    public function acceptAgreementApproval(AcceptAgreementApprovalRequest $args)
    {
        $result = parent::acceptAgreementApproval($args->toArray());
        return new AcceptAgreementApprovalResponse($result->toArray());
    }
}
