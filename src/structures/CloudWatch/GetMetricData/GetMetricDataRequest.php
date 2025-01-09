<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\MetricDataQuery> $MetricDataQueries
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $NextToken
 * @property 'TimestampDescending'|'TimestampAscending' $ScanBy
 * @property int $MaxDatapoints
 * @property Shapes\LabelOptions $LabelOptions
 */
class GetMetricDataRequest extends Request
{
    /**
     * @param array{
     *     MetricDataQueries: list<Shapes\MetricDataQuery>,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     NextToken?: string,
     *     ScanBy?: 'TimestampDescending'|'TimestampAscending',
     *     MaxDatapoints?: int,
     *     LabelOptions?: Shapes\LabelOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
