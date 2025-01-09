<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'TEST'|'CODE_COVERAGE' $type
 * @property string $name
 * @property string $reportGroupArn
 * @property string $executionId
 * @property 'GENERATING'|'SUCCEEDED'|'FAILED'|'INCOMPLETE'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $created
 * @property \Aws\Api\DateTimeResult $expired
 * @property ReportExportConfig $exportConfig
 * @property bool $truncated
 * @property TestReportSummary $testSummary
 * @property CodeCoverageReportSummary $codeCoverageSummary
 */
class Report extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     type?: 'TEST'|'CODE_COVERAGE',
     *     name?: string,
     *     reportGroupArn?: string,
     *     executionId?: string,
     *     status?: 'GENERATING'|'SUCCEEDED'|'FAILED'|'INCOMPLETE'|'DELETING',
     *     created?: \Aws\Api\DateTimeResult,
     *     expired?: \Aws\Api\DateTimeResult,
     *     exportConfig?: ReportExportConfig,
     *     truncated?: bool,
     *     testSummary?: TestReportSummary,
     *     codeCoverageSummary?: CodeCoverageReportSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
