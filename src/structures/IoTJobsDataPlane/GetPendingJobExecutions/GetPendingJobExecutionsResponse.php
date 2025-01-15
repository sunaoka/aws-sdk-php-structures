<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\GetPendingJobExecutions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\JobExecutionSummary>|null $inProgressJobs
 * @property list<Shapes\JobExecutionSummary>|null $queuedJobs
 */
class GetPendingJobExecutionsResponse extends Response
{
}
