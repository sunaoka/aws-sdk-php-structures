<?php

namespace Sunaoka\Aws\Structures\PI\GetPerformanceAnalysisReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnalysisReportId
 * @property string $Identifier
 * @property 'RDS'|'DOCDB' $ServiceType
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED' $Status
 * @property list<Insight> $Insights
 */
class AnalysisReport extends Shape
{
    /**
     * @param array{
     *     AnalysisReportId: string,
     *     Identifier?: string,
     *     ServiceType?: 'RDS'|'DOCDB',
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'RUNNING'|'SUCCEEDED'|'FAILED',
     *     Insights?: list<Insight>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
