<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListInsightsMetricData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventSource
 * @property string $EventName
 * @property 'ApiCallRateInsight'|'ApiErrorRateInsight' $InsightType
 * @property string|null $ErrorCode
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int<60, 3600>|null $Period
 * @property 'FillWithZeros'|'NonZeroData'|null $DataType
 * @property int<1, 21600>|null $MaxResults
 * @property string|null $NextToken
 */
class ListInsightsMetricDataRequest extends Request
{
    /**
     * @param array{
     *     EventSource: string,
     *     EventName: string,
     *     InsightType: 'ApiCallRateInsight'|'ApiErrorRateInsight',
     *     ErrorCode?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Period?: int<60, 3600>|null,
     *     DataType?: 'FillWithZeros'|'NonZeroData'|null,
     *     MaxResults?: int<1, 21600>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
