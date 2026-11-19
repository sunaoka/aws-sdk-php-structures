<?php

namespace Sunaoka\Aws\Structures\AbuseSignal\ListAbuseReportStatuses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $correlationId
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListAbuseReportStatusesRequest extends Request
{
    /**
     * @param array{
     *     correlationId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
