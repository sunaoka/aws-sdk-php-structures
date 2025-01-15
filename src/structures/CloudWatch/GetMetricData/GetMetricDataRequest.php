<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\MetricDataQuery> $MetricDataQueries
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string|null $NextToken
 * @property 'TimestampDescending'|'TimestampAscending'|null $ScanBy
 * @property int|null $MaxDatapoints
 * @property Shapes\LabelOptions|null $LabelOptions
 */
class GetMetricDataRequest extends Request
{
    /**
     * @param array{
     *     MetricDataQueries: list<Shapes\MetricDataQuery>,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     NextToken?: string|null,
     *     ScanBy?: 'TimestampDescending'|'TimestampAscending'|null,
     *     MaxDatapoints?: int|null,
     *     LabelOptions?: Shapes\LabelOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
