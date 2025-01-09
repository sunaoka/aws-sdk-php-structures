<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListInsightsMetricData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EventSource
 * @property string $EventName
 * @property 'ApiCallRateInsight'|'ApiErrorRateInsight' $InsightType
 * @property string $ErrorCode
 * @property list<\Aws\Api\DateTimeResult> $Timestamps
 * @property list<double> $Values
 * @property string $NextToken
 */
class ListInsightsMetricDataResponse extends Response
{
}
