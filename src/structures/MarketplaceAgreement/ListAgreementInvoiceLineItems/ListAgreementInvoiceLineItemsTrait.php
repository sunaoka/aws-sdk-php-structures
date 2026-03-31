<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementInvoiceLineItems;

trait ListAgreementInvoiceLineItemsTrait
{
    /**
     * @param ListAgreementInvoiceLineItemsRequest $args
     * @return ListAgreementInvoiceLineItemsResponse
     */
    public function listAgreementInvoiceLineItems(ListAgreementInvoiceLineItemsRequest $args)
    {
        $result = parent::listAgreementInvoiceLineItems($args->toArray());
        return new ListAgreementInvoiceLineItemsResponse($result->toArray());
    }
}
