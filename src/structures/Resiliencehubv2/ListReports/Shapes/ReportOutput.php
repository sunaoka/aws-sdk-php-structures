<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ReportOutput|null $s3ReportOutput
 * @property FailedReportOutput|null $failedReportOutput
 */
class ReportOutput extends Shape
{
    /**
     * @param array{
     *     s3ReportOutput?: S3ReportOutput|null,
     *     failedReportOutput?: FailedReportOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
