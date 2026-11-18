<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\AcceptAgreementApproval\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agreementApprovalId
 * @property list<AgreementApprovalPurchaseOrder>|null $purchaseOrders
 * @property string|null $note
 * @property string|null $approverOutcomeIdToOverride
 */
class BuyerAgreementApprovalApproverInput extends Shape
{
    /**
     * @param array{
     *     agreementApprovalId: string,
     *     purchaseOrders?: list<AgreementApprovalPurchaseOrder>|null,
     *     note?: string|null,
     *     approverOutcomeIdToOverride?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
