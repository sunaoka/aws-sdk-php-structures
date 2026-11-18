<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementRequestApprovalPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BuyerAgreementApprovalPlan|null $buyerAgreementApprovalPlan
 */
class AgreementApprovalPlan extends Shape
{
    /**
     * @param array{buyerAgreementApprovalPlan?: BuyerAgreementApprovalPlan|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
