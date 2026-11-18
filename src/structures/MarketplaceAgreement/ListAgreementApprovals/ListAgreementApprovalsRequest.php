<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementApprovals;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $catalog
 * @property 'REQUESTER'|'AWS_ORGANIZATION_ADMIN' $partyType
 * @property string|null $agreementRequestId
 * @property 'BUYER_AGREEMENT_APPROVAL'|null $approvalType
 * @property 'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'EXPIRED'|'CANCELLED'|null $status
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListAgreementApprovalsRequest extends Request
{
    /**
     * @param array{
     *     catalog?: string|null,
     *     partyType: 'REQUESTER'|'AWS_ORGANIZATION_ADMIN',
     *     agreementRequestId?: string|null,
     *     approvalType?: 'BUYER_AGREEMENT_APPROVAL'|null,
     *     status?: 'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'EXPIRED'|'CANCELLED'|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
