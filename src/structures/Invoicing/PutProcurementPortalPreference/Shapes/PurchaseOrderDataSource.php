<?php

namespace Sunaoka\Aws\Structures\Invoicing\PutProcurementPortalPreference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_CLOUD_INVOICE'|'AWS_CLOUD_CREDIT_MEMO'|'AWS_MARKETPLACE_INVOICE'|'AWS_MARKETPLACE_CREDIT_MEMO'|'AWS_REQUEST_FOR_PAYMENT'|null $EinvoiceDeliveryDocumentType
 * @property 'ASSOCIATED_PURCHASE_ORDER_REQUIRED'|'PURCHASE_ORDER_NOT_REQUIRED'|null $PurchaseOrderDataSourceType
 */
class PurchaseOrderDataSource extends Shape
{
    /**
     * @param array{
     *     EinvoiceDeliveryDocumentType?: 'AWS_CLOUD_INVOICE'|'AWS_CLOUD_CREDIT_MEMO'|'AWS_MARKETPLACE_INVOICE'|'AWS_MARKETPLACE_CREDIT_MEMO'|'AWS_REQUEST_FOR_PAYMENT'|null,
     *     PurchaseOrderDataSourceType?: 'ASSOCIATED_PURCHASE_ORDER_REQUIRED'|'PURCHASE_ORDER_NOT_REQUIRED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
