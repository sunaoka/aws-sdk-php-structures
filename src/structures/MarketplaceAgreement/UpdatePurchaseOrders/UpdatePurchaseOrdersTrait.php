<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\UpdatePurchaseOrders;

trait UpdatePurchaseOrdersTrait
{
    /**
     * @param UpdatePurchaseOrdersRequest $args
     * @return UpdatePurchaseOrdersResponse
     */
    public function updatePurchaseOrders(UpdatePurchaseOrdersRequest $args)
    {
        $result = parent::updatePurchaseOrders($args->toArray());
        return new UpdatePurchaseOrdersResponse($result->toArray());
    }
}
