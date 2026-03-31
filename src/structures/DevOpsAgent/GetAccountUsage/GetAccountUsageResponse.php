<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAccountUsage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\UsageMetric|null $monthlyAccountInvestigationHours
 * @property Shapes\UsageMetric|null $monthlyAccountEvaluationHours
 * @property Shapes\UsageMetric|null $monthlyAccountSystemLearningHours
 * @property Shapes\UsageMetric|null $monthlyAccountOnDemandHours
 * @property \Aws\Api\DateTimeResult $usagePeriodStartTime
 * @property \Aws\Api\DateTimeResult $usagePeriodEndTime
 */
class GetAccountUsageResponse extends Response
{
}
