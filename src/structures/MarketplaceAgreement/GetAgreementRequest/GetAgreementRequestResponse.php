<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementRequest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $agreementRequestId
 * @property string|null $agreementType
 * @property 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'ACCEPTED'|'REJECTED'|'CANCELLED'|null $status
 * @property 'REQUIRED'|'NOT_REQUIRED'|null $approvalRequirement
 * @property string|null $agreementId
 * @property 'NEW'|'AMEND'|'REPLACE'|null $intent
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property Shapes\ChargeSummary|null $chargeSummary
 * @property Shapes\Proposer|null $proposer
 * @property Shapes\ProposalSummary|null $proposalSummary
 */
class GetAgreementRequestResponse extends Response
{
}
