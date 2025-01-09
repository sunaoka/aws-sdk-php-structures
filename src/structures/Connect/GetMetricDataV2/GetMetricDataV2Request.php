<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property Shapes\IntervalDetails $Interval
 * @property list<Shapes\FilterV2> $Filters
 * @property list<string> $Groupings
 * @property list<Shapes\MetricV2> $Metrics
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class GetMetricDataV2Request extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     Interval?: Shapes\IntervalDetails,
     *     Filters: list<Shapes\FilterV2>,
     *     Groupings?: list<string>,
     *     Metrics: list<Shapes\MetricV2>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
