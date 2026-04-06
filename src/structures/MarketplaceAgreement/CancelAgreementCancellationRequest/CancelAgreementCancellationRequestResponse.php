<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CancelAgreementCancellationRequest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $agreementCancellationRequestId
 * @property string|null $agreementId
 * @property 'INCORRECT_TERMS_ACCEPTED'|'REPLACING_AGREEMENT'|'TEST_AGREEMENT'|'ALTERNATIVE_PROCUREMENT_CHANNEL'|'PRODUCT_DISCONTINUED'|'UNINTENDED_RENEWAL'|'BUYER_DISSATISFACTION'|'OTHER'|null $reasonCode
 * @property string|null $description
 * @property 'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'CANCELLED'|'VALIDATION_FAILED'|null $status
 * @property string|null $statusMessage
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class CancelAgreementCancellationRequestResponse extends Response
{
}
