<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetFindingsReportAccountSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $dailyReportsOnly
 * @property int $maxResults
 * @property string $nextToken
 */
class GetFindingsReportAccountSummaryRequest extends Request
{
    /**
     * @param array{
     *     dailyReportsOnly?: bool,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
