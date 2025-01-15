<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetQueryStatistics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ExecutionStatistics|null $ExecutionStatistics
 * @property Shapes\PlanningStatistics|null $PlanningStatistics
 * @property \Aws\Api\DateTimeResult|null $QuerySubmissionTime
 */
class GetQueryStatisticsResponse extends Response
{
}
