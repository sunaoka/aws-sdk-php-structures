<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetRecommendations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Anomaly> $anomalies
 * @property \Aws\Api\DateTimeResult $profileEndTime
 * @property \Aws\Api\DateTimeResult $profileStartTime
 * @property string $profilingGroupName
 * @property list<Shapes\Recommendation> $recommendations
 */
class GetRecommendationsResponse extends Response
{
}
