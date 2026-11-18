<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementApproval;

trait GetAgreementApprovalTrait
{
    /**
     * @param GetAgreementApprovalRequest $args
     * @return GetAgreementApprovalResponse
     */
    public function getAgreementApproval(GetAgreementApprovalRequest $args)
    {
        $result = parent::getAgreementApproval($args->toArray());
        return new GetAgreementApprovalResponse($result->toArray());
    }
}
