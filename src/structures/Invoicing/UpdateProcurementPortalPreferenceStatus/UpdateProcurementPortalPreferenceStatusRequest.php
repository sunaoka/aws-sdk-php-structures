<?php

namespace Sunaoka\Aws\Structures\Invoicing\UpdateProcurementPortalPreferenceStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProcurementPortalPreferenceArn
 * @property 'PENDING_VERIFICATION'|'TEST_INITIALIZED'|'TEST_INITIALIZATION_FAILED'|'TEST_FAILED'|'ACTIVE'|'SUSPENDED'|null $EinvoiceDeliveryPreferenceStatus
 * @property string|null $EinvoiceDeliveryPreferenceStatusReason
 * @property 'PENDING_VERIFICATION'|'TEST_INITIALIZED'|'TEST_INITIALIZATION_FAILED'|'TEST_FAILED'|'ACTIVE'|'SUSPENDED'|null $PurchaseOrderRetrievalPreferenceStatus
 * @property string|null $PurchaseOrderRetrievalPreferenceStatusReason
 */
class UpdateProcurementPortalPreferenceStatusRequest extends Request
{
    /**
     * @param array{
     *     ProcurementPortalPreferenceArn: string,
     *     EinvoiceDeliveryPreferenceStatus?: 'PENDING_VERIFICATION'|'TEST_INITIALIZED'|'TEST_INITIALIZATION_FAILED'|'TEST_FAILED'|'ACTIVE'|'SUSPENDED'|null,
     *     EinvoiceDeliveryPreferenceStatusReason?: string|null,
     *     PurchaseOrderRetrievalPreferenceStatus?: 'PENDING_VERIFICATION'|'TEST_INITIALIZED'|'TEST_INITIALIZATION_FAILED'|'TEST_FAILED'|'ACTIVE'|'SUSPENDED'|null,
     *     PurchaseOrderRetrievalPreferenceStatusReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
