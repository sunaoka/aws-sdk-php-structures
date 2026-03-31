<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\BatchCreateBillingAdjustmentRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agreementId
 * @property string $originalInvoiceId
 * @property string $adjustmentAmount
 * @property string $currencyCode
 * @property 'INCORRECT_TERMS_ACCEPTED'|'INCORRECT_METERING'|'TEST_ENVIRONMENT_CHARGES'|'ALTERNATIVE_PROCUREMENT_CHANNEL'|'UNINTENDED_RENEWAL'|'BUYER_DISSATISFACTION'|'OTHER' $adjustmentReasonCode
 * @property string|null $description
 * @property string $clientToken
 */
class BatchCreateBillingAdjustmentRequestEntry extends Shape
{
    /**
     * @param array{
     *     agreementId: string,
     *     originalInvoiceId: string,
     *     adjustmentAmount: string,
     *     currencyCode: string,
     *     adjustmentReasonCode: 'INCORRECT_TERMS_ACCEPTED'|'INCORRECT_METERING'|'TEST_ENVIRONMENT_CHARGES'|'ALTERNATIVE_PROCUREMENT_CHANNEL'|'UNINTENDED_RENEWAL'|'BUYER_DISSATISFACTION'|'OTHER',
     *     description?: string|null,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
