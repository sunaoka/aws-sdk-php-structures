<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\StartAgreementApprovals;

trait StartAgreementApprovalsTrait
{
    /**
     * @param StartAgreementApprovalsRequest $args
     * @return StartAgreementApprovalsResponse
     */
    public function startAgreementApprovals(StartAgreementApprovalsRequest $args)
    {
        $result = parent::startAgreementApprovals($args->toArray());
        return new StartAgreementApprovalsResponse($result->toArray());
    }
}
