<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CreateAgreementRequest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $agreementRequestId
 * @property string|null $agreementType
 * @property Shapes\ChargeSummary|null $chargeSummary
 * @property 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'ACCEPTED'|'REJECTED'|'CANCELLED'|null $status
 * @property 'REQUIRED'|'NOT_REQUIRED'|null $approvalRequirement
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class CreateAgreementRequestResponse extends Response
{
}
