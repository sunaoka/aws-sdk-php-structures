<?php

namespace Sunaoka\Aws\Structures\DataZone\GetJobRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property Shapes\JobRunDetails|null $details
 * @property string|null $domainId
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property Shapes\JobRunError|null $error
 * @property string|null $id
 * @property string|null $jobId
 * @property 'LINEAGE'|null $jobType
 * @property 'SCHEDULED'|'ON_DEMAND'|null $runMode
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'SCHEDULED'|'IN_PROGRESS'|'SUCCESS'|'PARTIALLY_SUCCEEDED'|'FAILED'|'ABORTED'|'TIMED_OUT'|'CANCELED'|null $status
 */
class GetJobRunResponse extends Response
{
}
