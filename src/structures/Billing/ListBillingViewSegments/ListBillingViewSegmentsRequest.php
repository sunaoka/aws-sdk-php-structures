<?php

namespace Sunaoka\Aws\Structures\Billing\ListBillingViewSegments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\BillingViewSegmentTimeRange|null $timeRange
 * @property string|null $arn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListBillingViewSegmentsRequest extends Request
{
    /**
     * @param array{
     *     timeRange?: Shapes\BillingViewSegmentTimeRange|null,
     *     arn?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
