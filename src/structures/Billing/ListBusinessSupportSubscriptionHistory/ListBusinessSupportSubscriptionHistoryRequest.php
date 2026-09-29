<?php

namespace Sunaoka\Aws\Structures\Billing\ListBusinessSupportSubscriptionHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $billingMonth
 * @property string|null $accountId
 * @property \Aws\Api\DateTimeResult|null $startDate
 * @property \Aws\Api\DateTimeResult|null $endDate
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListBusinessSupportSubscriptionHistoryRequest extends Request
{
    /**
     * @param array{
     *     billingMonth?: string|null,
     *     accountId?: string|null,
     *     startDate?: \Aws\Api\DateTimeResult|null,
     *     endDate?: \Aws\Api\DateTimeResult|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
