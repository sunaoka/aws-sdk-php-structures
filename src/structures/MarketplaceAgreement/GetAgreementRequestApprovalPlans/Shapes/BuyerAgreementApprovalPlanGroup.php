<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementRequestApprovalPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BuyerAgreementApprovalCriteria $approvalCriteria
 * @property list<Approver> $approvers
 */
class BuyerAgreementApprovalPlanGroup extends Shape
{
    /**
     * @param array{
     *     approvalCriteria: BuyerAgreementApprovalCriteria,
     *     approvers: list<Approver>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
