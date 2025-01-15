<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetInsightRuleReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleName
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int<1, max> $Period
 * @property int|null $MaxContributorCount
 * @property list<string>|null $Metrics
 * @property string|null $OrderBy
 */
class GetInsightRuleReportRequest extends Request
{
    /**
     * @param array{
     *     RuleName: string,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     Period: int<1, max>,
     *     MaxContributorCount?: int|null,
     *     Metrics?: list<string>|null,
     *     OrderBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
