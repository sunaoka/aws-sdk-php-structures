<?php

namespace Sunaoka\Aws\Structures\DataZone\GetJobRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $domainId
 * @property string|null $id
 * @property string|null $jobId
 * @property 'LINEAGE'|null $jobType
 * @property 'SCHEDULED'|'ON_DEMAND'|null $runMode
 * @property Shapes\JobRunDetails|null $details
 * @property 'SCHEDULED'|'IN_PROGRESS'|'SUCCESS'|'PARTIALLY_SUCCEEDED'|'FAILED'|'ABORTED'|'TIMED_OUT'|'CANCELED'|null $status
 * @property Shapes\JobRunError|null $error
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class GetJobRunResponse extends Response
{
}
