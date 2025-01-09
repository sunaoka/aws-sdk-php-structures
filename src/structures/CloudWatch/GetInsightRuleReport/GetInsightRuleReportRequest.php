<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetInsightRuleReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleName
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $Period
 * @property int $MaxContributorCount
 * @property list<string> $Metrics
 * @property string $OrderBy
 */
class GetInsightRuleReportRequest extends Request
{
    /**
     * @param array{
     *     RuleName: string,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     Period: int,
     *     MaxContributorCount?: int,
     *     Metrics?: list<string>,
     *     OrderBy?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
