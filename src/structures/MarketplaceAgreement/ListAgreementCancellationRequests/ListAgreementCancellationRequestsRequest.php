<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementCancellationRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $partyType
 * @property string|null $agreementId
 * @property 'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'CANCELLED'|'VALIDATION_FAILED'|null $status
 * @property string|null $agreementType
 * @property string|null $catalog
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListAgreementCancellationRequestsRequest extends Request
{
    /**
     * @param array{
     *     partyType: string,
     *     agreementId?: string|null,
     *     status?: 'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'CANCELLED'|'VALIDATION_FAILED'|null,
     *     agreementType?: string|null,
     *     catalog?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
