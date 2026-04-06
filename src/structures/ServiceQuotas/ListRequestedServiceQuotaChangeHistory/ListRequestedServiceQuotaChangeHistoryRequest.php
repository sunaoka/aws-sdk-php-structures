<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListRequestedServiceQuotaChangeHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ServiceCode
 * @property 'PENDING'|'CASE_OPENED'|'APPROVED'|'DENIED'|'CASE_CLOSED'|null $Status
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListRequestedServiceQuotaChangeHistoryRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode?: string|null,
     *     Status?: 'PENDING'|'CASE_OPENED'|'APPROVED'|'DENIED'|'CASE_CLOSED'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
