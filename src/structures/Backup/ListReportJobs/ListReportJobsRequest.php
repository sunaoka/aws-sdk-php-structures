<?php

namespace Sunaoka\Aws\Structures\Backup\ListReportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ByReportPlanName
 * @property \Aws\Api\DateTimeResult|null $ByCreationBefore
 * @property \Aws\Api\DateTimeResult|null $ByCreationAfter
 * @property string|null $ByStatus
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListReportJobsRequest extends Request
{
    /**
     * @param array{
     *     ByReportPlanName?: string|null,
     *     ByCreationBefore?: \Aws\Api\DateTimeResult|null,
     *     ByCreationAfter?: \Aws\Api\DateTimeResult|null,
     *     ByStatus?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
