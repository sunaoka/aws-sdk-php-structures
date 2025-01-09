<?php

namespace Sunaoka\Aws\Structures\PI\GetResourceMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RDS'|'DOCDB' $ServiceType
 * @property string $Identifier
 * @property list<Shapes\MetricQuery> $MetricQueries
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $PeriodInSeconds
 * @property int $MaxResults
 * @property string $NextToken
 * @property 'END_TIME'|'START_TIME' $PeriodAlignment
 */
class GetResourceMetricsRequest extends Request
{
    /**
     * @param array{
     *     ServiceType: 'RDS'|'DOCDB',
     *     Identifier: string,
     *     MetricQueries: list<Shapes\MetricQuery>,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     PeriodInSeconds?: int,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     PeriodAlignment?: 'END_TIME'|'START_TIME'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
