<?php

namespace Sunaoka\Aws\Structures\Invoicing\GetProcurementPortalPreference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'AWS_CLOUD_INVOICE'|'AWS_CLOUD_CREDIT_MEMO'|'AWS_MARKETPLACE_INVOICE'|'AWS_MARKETPLACE_CREDIT_MEMO'|'AWS_REQUEST_FOR_PAYMENT'> $EinvoiceDeliveryDocumentTypes
 * @property list<'INVOICE_PDF'|'RFP_PDF'>|null $EinvoiceDeliveryAttachmentTypes
 * @property 'CXML' $Protocol
 * @property list<PurchaseOrderDataSource> $PurchaseOrderDataSources
 * @property 'PROD_ENV_DOLLAR_TEST'|'TEST_ENV_REPLAY_TEST' $ConnectionTestingMethod
 * @property \Aws\Api\DateTimeResult $EinvoiceDeliveryActivationDate
 */
class EinvoiceDeliveryPreference extends Shape
{
    /**
     * @param array{
     *     EinvoiceDeliveryDocumentTypes: list<'AWS_CLOUD_INVOICE'|'AWS_CLOUD_CREDIT_MEMO'|'AWS_MARKETPLACE_INVOICE'|'AWS_MARKETPLACE_CREDIT_MEMO'|'AWS_REQUEST_FOR_PAYMENT'>,
     *     EinvoiceDeliveryAttachmentTypes?: list<'INVOICE_PDF'|'RFP_PDF'>|null,
     *     Protocol: 'CXML',
     *     PurchaseOrderDataSources: list<PurchaseOrderDataSource>,
     *     ConnectionTestingMethod: 'PROD_ENV_DOLLAR_TEST'|'TEST_ENV_REPLAY_TEST',
     *     EinvoiceDeliveryActivationDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
