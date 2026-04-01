<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListBillingAdjustmentRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $billingAdjustmentRequestId
 * @property string $originalInvoiceId
 * @property string $adjustmentAmount
 * @property string $currencyCode
 * @property 'PENDING'|'VALIDATION_FAILED'|'COMPLETED' $status
 * @property string $agreementId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $agreementType
 * @property string $catalog
 */
class BillingAdjustmentSummary extends Shape
{
    /**
     * @param array{
     *     billingAdjustmentRequestId: string,
     *     originalInvoiceId: string,
     *     adjustmentAmount: string,
     *     currencyCode: string,
     *     status: 'PENDING'|'VALIDATION_FAILED'|'COMPLETED',
     *     agreementId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     agreementType: string,
     *     catalog: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
