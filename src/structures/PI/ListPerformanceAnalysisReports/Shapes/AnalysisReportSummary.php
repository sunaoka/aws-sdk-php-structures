<?php

namespace Sunaoka\Aws\Structures\PI\ListPerformanceAnalysisReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnalysisReportId
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED' $Status
 * @property list<Tag> $Tags
 */
class AnalysisReportSummary extends Shape
{
    /**
     * @param array{
     *     AnalysisReportId?: string,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'RUNNING'|'SUCCEEDED'|'FAILED',
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
