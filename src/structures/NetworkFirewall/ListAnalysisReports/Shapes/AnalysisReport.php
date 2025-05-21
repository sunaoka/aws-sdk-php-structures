<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListAnalysisReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AnalysisReportId
 * @property 'TLS_SNI'|'HTTP_HOST'|null $AnalysisType
 * @property \Aws\Api\DateTimeResult|null $ReportTime
 * @property string|null $Status
 */
class AnalysisReport extends Shape
{
    /**
     * @param array{
     *     AnalysisReportId?: string|null,
     *     AnalysisType?: 'TLS_SNI'|'HTTP_HOST'|null,
     *     ReportTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
