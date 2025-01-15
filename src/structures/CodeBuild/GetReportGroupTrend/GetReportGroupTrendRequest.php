<?php

namespace Sunaoka\Aws\Structures\CodeBuild\GetReportGroupTrend;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportGroupArn
 * @property int<1, 100>|null $numOfReports
 * @property 'PASS_RATE'|'DURATION'|'TOTAL'|'LINE_COVERAGE'|'LINES_COVERED'|'LINES_MISSED'|'BRANCH_COVERAGE'|'BRANCHES_COVERED'|'BRANCHES_MISSED' $trendField
 */
class GetReportGroupTrendRequest extends Request
{
    /**
     * @param array{
     *     reportGroupArn: string,
     *     numOfReports?: int<1, 100>|null,
     *     trendField: 'PASS_RATE'|'DURATION'|'TOTAL'|'LINE_COVERAGE'|'LINES_COVERED'|'LINES_MISSED'|'BRANCH_COVERAGE'|'BRANCHES_COVERED'|'BRANCHES_MISSED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
