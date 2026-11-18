<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\StartAgreementApprovals;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementRequestId
 * @property list<Shapes\AgreementApprovalPlanInput> $planInputs
 * @property list<Shapes\AgreementApprovalPurchaseOrder>|null $purchaseOrders
 */
class StartAgreementApprovalsRequest extends Request
{
    /**
     * @param array{
     *     agreementRequestId: string,
     *     planInputs: list<Shapes\AgreementApprovalPlanInput>,
     *     purchaseOrders?: list<Shapes\AgreementApprovalPurchaseOrder>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
