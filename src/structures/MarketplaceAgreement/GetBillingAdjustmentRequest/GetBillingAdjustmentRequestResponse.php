<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetBillingAdjustmentRequest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $billingAdjustmentRequestId
 * @property string $agreementId
 * @property 'INCORRECT_TERMS_ACCEPTED'|'INCORRECT_METERING'|'TEST_ENVIRONMENT_CHARGES'|'ALTERNATIVE_PROCUREMENT_CHANNEL'|'UNINTENDED_RENEWAL'|'BUYER_DISSATISFACTION'|'OTHER' $adjustmentReasonCode
 * @property string|null $description
 * @property string $originalInvoiceId
 * @property string $adjustmentAmount
 * @property string $currencyCode
 * @property 'PENDING'|'VALIDATION_FAILED'|'COMPLETED' $status
 * @property string|null $statusMessage
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetBillingAdjustmentRequestResponse extends Response
{
}
