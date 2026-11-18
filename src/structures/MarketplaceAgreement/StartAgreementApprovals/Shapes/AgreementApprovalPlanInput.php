<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\StartAgreementApprovals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BuyerAgreementApprovalPlanInput|null $buyerAgreementApprovalPlanInput
 */
class AgreementApprovalPlanInput extends Shape
{
    /**
     * @param array{buyerAgreementApprovalPlanInput?: BuyerAgreementApprovalPlanInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
