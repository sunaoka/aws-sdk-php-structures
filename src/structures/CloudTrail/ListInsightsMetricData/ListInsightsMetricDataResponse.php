<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListInsightsMetricData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EventSource
 * @property string|null $EventName
 * @property 'ApiCallRateInsight'|'ApiErrorRateInsight'|null $InsightType
 * @property string|null $ErrorCode
 * @property list<\Aws\Api\DateTimeResult>|null $Timestamps
 * @property list<double>|null $Values
 * @property string|null $NextToken
 */
class ListInsightsMetricDataResponse extends Response
{
}
