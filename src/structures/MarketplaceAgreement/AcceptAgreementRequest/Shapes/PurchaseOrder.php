<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\AcceptAgreementRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $chargeId
 * @property int<1, max>|null $chargeRevision
 * @property string|null $agreementId
 * @property string|null $purchaseOrderReference
 */
class PurchaseOrder extends Shape
{
    /**
     * @param array{
     *     chargeId: string,
     *     chargeRevision?: int<1, max>|null,
     *     agreementId?: string|null,
     *     purchaseOrderReference?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
