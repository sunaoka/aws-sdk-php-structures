<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetVerification;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'BUSINESS_VERIFICATION'|'REGISTRANT_VERIFICATION' $VerificationType
 * @property 'PENDING_CUSTOMER_ACTION'|'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'REJECTED' $VerificationStatus
 * @property string|null $VerificationStatusReason
 * @property Shapes\VerificationResponseDetails $VerificationResponseDetails
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property \Aws\Api\DateTimeResult|null $CompletedAt
 */
class GetVerificationResponse extends Response
{
}
