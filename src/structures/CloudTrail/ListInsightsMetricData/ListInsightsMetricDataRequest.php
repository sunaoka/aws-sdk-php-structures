<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListInsightsMetricData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventSource
 * @property string $EventName
 * @property 'ApiCallRateInsight'|'ApiErrorRateInsight' $InsightType
 * @property string $ErrorCode
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $Period
 * @property 'FillWithZeros'|'NonZeroData' $DataType
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListInsightsMetricDataRequest extends Request
{
    /**
     * @param array{
     *     EventSource: string,
     *     EventName: string,
     *     InsightType: 'ApiCallRateInsight'|'ApiErrorRateInsight',
     *     ErrorCode?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Period?: int,
     *     DataType?: 'FillWithZeros'|'NonZeroData',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
