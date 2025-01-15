<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetFindingsReportAccountSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $dailyReportsOnly
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class GetFindingsReportAccountSummaryRequest extends Request
{
    /**
     * @param array{
     *     dailyReportsOnly?: bool|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
