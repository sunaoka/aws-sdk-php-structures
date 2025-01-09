<?php

namespace Sunaoka\Aws\Structures\Backup\ListReportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ByReportPlanName
 * @property \Aws\Api\DateTimeResult $ByCreationBefore
 * @property \Aws\Api\DateTimeResult $ByCreationAfter
 * @property string $ByStatus
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListReportJobsRequest extends Request
{
    /**
     * @param array{
     *     ByReportPlanName?: string,
     *     ByCreationBefore?: \Aws\Api\DateTimeResult,
     *     ByCreationAfter?: \Aws\Api\DateTimeResult,
     *     ByStatus?: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
