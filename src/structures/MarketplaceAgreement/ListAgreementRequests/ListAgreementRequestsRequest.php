<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $catalog
 * @property 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'ACCEPTED'|'REJECTED'|'CANCELLED'|null $status
 * @property string|null $resourceId
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListAgreementRequestsRequest extends Request
{
    /**
     * @param array{
     *     catalog?: string|null,
     *     status?: 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'ACCEPTED'|'REJECTED'|'CANCELLED'|null,
     *     resourceId?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
