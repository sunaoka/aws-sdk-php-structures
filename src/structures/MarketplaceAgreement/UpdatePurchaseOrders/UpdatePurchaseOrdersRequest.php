<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\UpdatePurchaseOrders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PurchaseOrder> $purchaseOrders
 */
class UpdatePurchaseOrdersRequest extends Request
{
    /**
     * @param array{purchaseOrders: list<Shapes\PurchaseOrder>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
