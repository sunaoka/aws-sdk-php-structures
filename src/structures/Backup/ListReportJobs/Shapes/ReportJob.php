<?php

namespace Sunaoka\Aws\Structures\Backup\ListReportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReportJobId
 * @property string|null $ReportPlanArn
 * @property string|null $ReportTemplate
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property string|null $Status
 * @property string|null $StatusMessage
 * @property ReportDestination|null $ReportDestination
 */
class ReportJob extends Shape
{
    /**
     * @param array{
     *     ReportJobId?: string|null,
     *     ReportPlanArn?: string|null,
     *     ReportTemplate?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     CompletionTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: string|null,
     *     StatusMessage?: string|null,
     *     ReportDestination?: ReportDestination|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
