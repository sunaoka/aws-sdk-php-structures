<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListBillingAdjustmentRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $agreementId
 * @property 'PENDING'|'VALIDATION_FAILED'|'COMPLETED'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAfter
 * @property \Aws\Api\DateTimeResult|null $createdBefore
 * @property int<1, 50>|null $maxResults
 * @property string|null $catalog
 * @property string|null $agreementType
 * @property string|null $nextToken
 */
class ListBillingAdjustmentRequestsRequest extends Request
{
    /**
     * @param array{
     *     agreementId?: string|null,
     *     status?: 'PENDING'|'VALIDATION_FAILED'|'COMPLETED'|null,
     *     createdAfter?: \Aws\Api\DateTimeResult|null,
     *     createdBefore?: \Aws\Api\DateTimeResult|null,
     *     maxResults?: int<1, 50>|null,
     *     catalog?: string|null,
     *     agreementType?: string|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
