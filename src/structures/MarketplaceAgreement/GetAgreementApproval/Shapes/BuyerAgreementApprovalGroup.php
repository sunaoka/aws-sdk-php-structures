<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementApproval\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BuyerAgreementApprovalCriteria $approvalCriteria
 * @property list<ApproverOutcome> $approvers
 */
class BuyerAgreementApprovalGroup extends Shape
{
    /**
     * @param array{
     *     approvalCriteria: BuyerAgreementApprovalCriteria,
     *     approvers: list<ApproverOutcome>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
