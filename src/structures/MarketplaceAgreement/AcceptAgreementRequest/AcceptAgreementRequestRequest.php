<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\AcceptAgreementRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementRequestId
 * @property list<Shapes\PurchaseOrder>|null $purchaseOrders
 */
class AcceptAgreementRequestRequest extends Request
{
    /**
     * @param array{
     *     agreementRequestId: string,
     *     purchaseOrders?: list<Shapes\PurchaseOrder>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
