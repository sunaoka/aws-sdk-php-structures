<?php

namespace Sunaoka\Aws\Structures\Backup\ListReportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ByReportPlanName
 * @property \Aws\Api\DateTimeResult $ByCreationBefore
 * @property \Aws\Api\DateTimeResult $ByCreationAfter
 * @property string $ByStatus
 * @property int $MaxResults
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
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
