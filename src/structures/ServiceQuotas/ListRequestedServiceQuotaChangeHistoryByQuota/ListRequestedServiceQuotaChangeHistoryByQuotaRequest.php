<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListRequestedServiceQuotaChangeHistoryByQuota;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property string $QuotaCode
 * @property 'PENDING'|'CASE_OPENED'|'APPROVED'|'DENIED'|'CASE_CLOSED'|'NOT_APPROVED'|'INVALID_REQUEST' $Status
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property 'ACCOUNT'|'RESOURCE'|'ALL' $QuotaRequestedAtLevel
 */
class ListRequestedServiceQuotaChangeHistoryByQuotaRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode: string,
     *     QuotaCode: string,
     *     Status?: 'PENDING'|'CASE_OPENED'|'APPROVED'|'DENIED'|'CASE_CLOSED'|'NOT_APPROVED'|'INVALID_REQUEST',
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     QuotaRequestedAtLevel?: 'ACCOUNT'|'RESOURCE'|'ALL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
