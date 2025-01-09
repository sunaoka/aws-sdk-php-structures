<?php

namespace Sunaoka\Aws\Structures\Backup\ListReportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReportJobId
 * @property string $ReportPlanArn
 * @property string $ReportTemplate
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $CompletionTime
 * @property string $Status
 * @property string $StatusMessage
 * @property ReportDestination $ReportDestination
 */
class ReportJob extends Shape
{
    /**
     * @param array{
     *     ReportJobId?: string,
     *     ReportPlanArn?: string,
     *     ReportTemplate?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     CompletionTime?: \Aws\Api\DateTimeResult,
     *     Status?: string,
     *     StatusMessage?: string,
     *     ReportDestination?: ReportDestination
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
