<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILURE_MODE' $reportType
 * @property 'PENDING'|'SUCCEEDED'|'FAILED' $status
 * @property string|null $serviceArn
 * @property string|null $assessmentId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property ReportOutput|null $reportOutput
 */
class ReportGenerationResult extends Shape
{
    /**
     * @param array{
     *     reportType: 'FAILURE_MODE',
     *     status: 'PENDING'|'SUCCEEDED'|'FAILED',
     *     serviceArn?: string|null,
     *     assessmentId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     reportOutput?: ReportOutput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
