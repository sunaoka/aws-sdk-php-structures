<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementApproval\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BUYER_AGREEMENT_APPROVAL' $approvalType
 * @property string $agreementApprovalId
 * @property string $name
 * @property string $agreementRequestId
 * @property 'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'EXPIRED'|'CANCELLED' $status
 * @property AgreementApprovalRequester $requester
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 * @property \Aws\Api\DateTimeResult $approvalNeededBy
 * @property list<BuyerAgreementApprovalLevel> $levels
 * @property BuyerAgreementApprovalPlanInput $planInput
 * @property AgreementApprovalProposer $proposer
 * @property AgreementApprovalProposalSummary $proposalSummary
 */
class BuyerAgreementApproval extends Shape
{
    /**
     * @param array{
     *     approvalType: 'BUYER_AGREEMENT_APPROVAL',
     *     agreementApprovalId: string,
     *     name: string,
     *     agreementRequestId: string,
     *     status: 'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'EXPIRED'|'CANCELLED',
     *     requester: AgreementApprovalRequester,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     expiresAt?: \Aws\Api\DateTimeResult|null,
     *     approvalNeededBy: \Aws\Api\DateTimeResult,
     *     levels: list<BuyerAgreementApprovalLevel>,
     *     planInput: BuyerAgreementApprovalPlanInput,
     *     proposer: AgreementApprovalProposer,
     *     proposalSummary: AgreementApprovalProposalSummary
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
