<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementRequestApprovalPlans;

trait GetAgreementRequestApprovalPlansTrait
{
    /**
     * @param GetAgreementRequestApprovalPlansRequest $args
     * @return GetAgreementRequestApprovalPlansResponse
     */
    public function getAgreementRequestApprovalPlans(GetAgreementRequestApprovalPlansRequest $args)
    {
        $result = parent::getAgreementRequestApprovalPlans($args->toArray());
        return new GetAgreementRequestApprovalPlansResponse($result->toArray());
    }
}
