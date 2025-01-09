<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\GetPendingJobExecutions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\JobExecutionSummary> $inProgressJobs
 * @property list<Shapes\JobExecutionSummary> $queuedJobs
 */
class GetPendingJobExecutionsResponse extends Response
{
}
