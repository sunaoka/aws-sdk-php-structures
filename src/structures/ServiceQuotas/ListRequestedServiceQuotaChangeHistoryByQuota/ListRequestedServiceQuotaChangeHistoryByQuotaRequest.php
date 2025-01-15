<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListRequestedServiceQuotaChangeHistoryByQuota;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property string $QuotaCode
 * @property 'PENDING'|'CASE_OPENED'|'APPROVED'|'DENIED'|'CASE_CLOSED'|'NOT_APPROVED'|'INVALID_REQUEST'|null $Status
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'ACCOUNT'|'RESOURCE'|'ALL'|null $QuotaRequestedAtLevel
 */
class ListRequestedServiceQuotaChangeHistoryByQuotaRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode: string,
     *     QuotaCode: string,
     *     Status?: 'PENDING'|'CASE_OPENED'|'APPROVED'|'DENIED'|'CASE_CLOSED'|'NOT_APPROVED'|'INVALID_REQUEST'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     QuotaRequestedAtLevel?: 'ACCOUNT'|'RESOURCE'|'ALL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
