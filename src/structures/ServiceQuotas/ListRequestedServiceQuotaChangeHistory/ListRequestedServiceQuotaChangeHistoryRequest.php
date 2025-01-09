<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListRequestedServiceQuotaChangeHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property 'PENDING'|'CASE_OPENED'|'APPROVED'|'DENIED'|'CASE_CLOSED'|'NOT_APPROVED'|'INVALID_REQUEST' $Status
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property 'ACCOUNT'|'RESOURCE'|'ALL' $QuotaRequestedAtLevel
 */
class ListRequestedServiceQuotaChangeHistoryRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode?: string,
     *     Status?: 'PENDING'|'CASE_OPENED'|'APPROVED'|'DENIED'|'CASE_CLOSED'|'NOT_APPROVED'|'INVALID_REQUEST',
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     QuotaRequestedAtLevel?: 'ACCOUNT'|'RESOURCE'|'ALL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
