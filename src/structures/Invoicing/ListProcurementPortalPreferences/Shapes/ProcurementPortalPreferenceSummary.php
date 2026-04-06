<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListProcurementPortalPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AwsAccountId
 * @property string $ProcurementPortalPreferenceArn
 * @property 'SAP_BUSINESS_NETWORK'|'COUPA' $ProcurementPortalName
 * @property 'NetworkID' $BuyerDomain
 * @property string $BuyerIdentifier
 * @property 'NetworkID' $SupplierDomain
 * @property string $SupplierIdentifier
 * @property ProcurementPortalPreferenceSelector|null $Selector
 * @property bool $EinvoiceDeliveryEnabled
 * @property bool $PurchaseOrderRetrievalEnabled
 * @property 'PENDING_VERIFICATION'|'TEST_INITIALIZED'|'TEST_INITIALIZATION_FAILED'|'TEST_FAILED'|'ACTIVE'|'SUSPENDED'|null $EinvoiceDeliveryPreferenceStatus
 * @property string|null $EinvoiceDeliveryPreferenceStatusReason
 * @property 'PENDING_VERIFICATION'|'TEST_INITIALIZED'|'TEST_INITIALIZATION_FAILED'|'TEST_FAILED'|'ACTIVE'|'SUSPENDED'|null $PurchaseOrderRetrievalPreferenceStatus
 * @property string|null $PurchaseOrderRetrievalPreferenceStatusReason
 * @property int $Version
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property \Aws\Api\DateTimeResult $LastUpdateDate
 */
class ProcurementPortalPreferenceSummary extends Shape
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ProcurementPortalPreferenceArn: string,
     *     ProcurementPortalName: 'SAP_BUSINESS_NETWORK'|'COUPA',
     *     BuyerDomain: 'NetworkID',
     *     BuyerIdentifier: string,
     *     SupplierDomain: 'NetworkID',
     *     SupplierIdentifier: string,
     *     Selector?: ProcurementPortalPreferenceSelector|null,
     *     EinvoiceDeliveryEnabled: bool,
     *     PurchaseOrderRetrievalEnabled: bool,
     *     EinvoiceDeliveryPreferenceStatus?: 'PENDING_VERIFICATION'|'TEST_INITIALIZED'|'TEST_INITIALIZATION_FAILED'|'TEST_FAILED'|'ACTIVE'|'SUSPENDED'|null,
     *     EinvoiceDeliveryPreferenceStatusReason?: string|null,
     *     PurchaseOrderRetrievalPreferenceStatus?: 'PENDING_VERIFICATION'|'TEST_INITIALIZED'|'TEST_INITIALIZATION_FAILED'|'TEST_FAILED'|'ACTIVE'|'SUSPENDED'|null,
     *     PurchaseOrderRetrievalPreferenceStatusReason?: string|null,
     *     Version: int,
     *     CreateDate: \Aws\Api\DateTimeResult,
     *     LastUpdateDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
