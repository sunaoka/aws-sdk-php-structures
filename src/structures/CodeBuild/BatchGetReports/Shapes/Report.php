<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property 'TEST'|'CODE_COVERAGE'|null $type
 * @property string|null $name
 * @property string|null $reportGroupArn
 * @property string|null $executionId
 * @property 'GENERATING'|'SUCCEEDED'|'FAILED'|'INCOMPLETE'|'DELETING'|null $status
 * @property \Aws\Api\DateTimeResult|null $created
 * @property \Aws\Api\DateTimeResult|null $expired
 * @property ReportExportConfig|null $exportConfig
 * @property bool|null $truncated
 * @property TestReportSummary|null $testSummary
 * @property CodeCoverageReportSummary|null $codeCoverageSummary
 */
class Report extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     type?: 'TEST'|'CODE_COVERAGE'|null,
     *     name?: string|null,
     *     reportGroupArn?: string|null,
     *     executionId?: string|null,
     *     status?: 'GENERATING'|'SUCCEEDED'|'FAILED'|'INCOMPLETE'|'DELETING'|null,
     *     created?: \Aws\Api\DateTimeResult|null,
     *     expired?: \Aws\Api\DateTimeResult|null,
     *     exportConfig?: ReportExportConfig|null,
     *     truncated?: bool|null,
     *     testSummary?: TestReportSummary|null,
     *     codeCoverageSummary?: CodeCoverageReportSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
