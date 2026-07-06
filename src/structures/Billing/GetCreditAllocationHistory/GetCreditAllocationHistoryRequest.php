<?php

namespace Sunaoka\Aws\Structures\Billing\GetCreditAllocationHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property int|null $creditId
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult $endDate
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class GetCreditAllocationHistoryRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     creditId?: int|null,
     *     startDate: \Aws\Api\DateTimeResult,
     *     endDate: \Aws\Api\DateTimeResult,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
