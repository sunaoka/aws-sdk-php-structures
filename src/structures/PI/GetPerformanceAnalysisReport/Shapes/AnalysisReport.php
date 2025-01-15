<?php

namespace Sunaoka\Aws\Structures\PI\GetPerformanceAnalysisReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnalysisReportId
 * @property string|null $Identifier
 * @property 'RDS'|'DOCDB'|null $ServiceType
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|null $Status
 * @property list<Insight>|null $Insights
 */
class AnalysisReport extends Shape
{
    /**
     * @param array{
     *     AnalysisReportId: string,
     *     Identifier?: string|null,
     *     ServiceType?: 'RDS'|'DOCDB'|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'RUNNING'|'SUCCEEDED'|'FAILED'|null,
     *     Insights?: list<Insight>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
