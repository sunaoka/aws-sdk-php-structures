<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property Shapes\IntervalDetails|null $Interval
 * @property list<Shapes\FilterV2> $Filters
 * @property list<string>|null $Groupings
 * @property list<Shapes\MetricV2> $Metrics
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class GetMetricDataV2Request extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     Interval?: Shapes\IntervalDetails|null,
     *     Filters: list<Shapes\FilterV2>,
     *     Groupings?: list<string>|null,
     *     Metrics: list<Shapes\MetricV2>,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
