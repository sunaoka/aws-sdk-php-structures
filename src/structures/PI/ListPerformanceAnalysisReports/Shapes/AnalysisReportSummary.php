<?php

namespace Sunaoka\Aws\Structures\PI\ListPerformanceAnalysisReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AnalysisReportId
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|null $Status
 * @property list<Tag>|null $Tags
 */
class AnalysisReportSummary extends Shape
{
    /**
     * @param array{
     *     AnalysisReportId?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'RUNNING'|'SUCCEEDED'|'FAILED'|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
