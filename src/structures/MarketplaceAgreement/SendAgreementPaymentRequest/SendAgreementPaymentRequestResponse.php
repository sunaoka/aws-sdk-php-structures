<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\SendAgreementPaymentRequest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $paymentRequestId
 * @property string|null $agreementId
 * @property 'VALIDATING'|'VALIDATION_FAILED'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'CANCELLED'|null $status
 * @property string|null $name
 * @property string|null $description
 * @property string|null $chargeAmount
 * @property string|null $currencyCode
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class SendAgreementPaymentRequestResponse extends Response
{
}
