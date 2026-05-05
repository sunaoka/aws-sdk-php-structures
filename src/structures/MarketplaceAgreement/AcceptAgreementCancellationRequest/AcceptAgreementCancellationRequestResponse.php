<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\AcceptAgreementCancellationRequest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $agreementId
 * @property string|null $agreementCancellationRequestId
 * @property 'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'CANCELLED'|'VALIDATION_FAILED'|null $status
 * @property 'INCORRECT_TERMS_ACCEPTED'|'REPLACING_AGREEMENT'|'TEST_AGREEMENT'|'ALTERNATIVE_PROCUREMENT_CHANNEL'|'PRODUCT_DISCONTINUED'|'UNINTENDED_RENEWAL'|'BUYER_DISSATISFACTION'|'OTHER'|null $reasonCode
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class AcceptAgreementCancellationRequestResponse extends Response
{
}
