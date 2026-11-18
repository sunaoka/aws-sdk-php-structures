<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agreementRequestId
 * @property string|null $agreementType
 * @property 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'ACCEPTED'|'REJECTED'|'CANCELLED'|null $status
 * @property string|null $agreementId
 * @property ProposalSummary|null $proposalSummary
 */
class AgreementRequestSummary extends Shape
{
    /**
     * @param array{
     *     agreementRequestId?: string|null,
     *     agreementType?: string|null,
     *     status?: 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'ACCEPTED'|'REJECTED'|'CANCELLED'|null,
     *     agreementId?: string|null,
     *     proposalSummary?: ProposalSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
