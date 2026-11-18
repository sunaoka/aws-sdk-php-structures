<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\StartAgreementApprovals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BUYER_AGREEMENT_APPROVAL' $approvalType
 * @property string $agreementRequestId
 * @property string $agreementApprovalId
 * @property string $name
 * @property 'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'EXPIRED'|'CANCELLED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 * @property \Aws\Api\DateTimeResult $approvalNeededBy
 */
class AgreementApprovalSummary extends Shape
{
    /**
     * @param array{
     *     approvalType: 'BUYER_AGREEMENT_APPROVAL',
     *     agreementRequestId: string,
     *     agreementApprovalId: string,
     *     name: string,
     *     status: 'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'EXPIRED'|'CANCELLED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     expiresAt?: \Aws\Api\DateTimeResult|null,
     *     approvalNeededBy: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
