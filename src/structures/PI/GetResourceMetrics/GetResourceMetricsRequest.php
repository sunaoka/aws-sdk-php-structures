<?php

namespace Sunaoka\Aws\Structures\PI\GetResourceMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RDS'|'DOCDB' $ServiceType
 * @property string $Identifier
 * @property list<Shapes\MetricQuery> $MetricQueries
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int|null $PeriodInSeconds
 * @property int<0, 25>|null $MaxResults
 * @property string|null $NextToken
 * @property 'END_TIME'|'START_TIME'|null $PeriodAlignment
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
     *     PeriodInSeconds?: int|null,
     *     MaxResults?: int<0, 25>|null,
     *     NextToken?: string|null,
     *     PeriodAlignment?: 'END_TIME'|'START_TIME'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
