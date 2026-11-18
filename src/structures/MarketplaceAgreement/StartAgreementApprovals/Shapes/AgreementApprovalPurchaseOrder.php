<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\StartAgreementApprovals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $chargeId
 * @property string|null $purchaseOrderReference
 */
class AgreementApprovalPurchaseOrder extends Shape
{
    /**
     * @param array{
     *     chargeId: string,
     *     purchaseOrderReference?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
