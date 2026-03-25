<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementPaymentRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $partyType
 * @property string|null $agreementType
 * @property string|null $catalog
 * @property string|null $agreementId
 * @property 'VALIDATING'|'VALIDATION_FAILED'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'CANCELLED'|null $status
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListAgreementPaymentRequestsRequest extends Request
{
    /**
     * @param array{
     *     partyType: string,
     *     agreementType?: string|null,
     *     catalog?: string|null,
     *     agreementId?: string|null,
     *     status?: 'VALIDATING'|'VALIDATION_FAILED'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'CANCELLED'|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
