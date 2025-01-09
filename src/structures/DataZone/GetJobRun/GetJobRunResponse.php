<?php

namespace Sunaoka\Aws\Structures\DataZone\GetJobRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property Shapes\JobRunDetails $details
 * @property string $domainId
 * @property \Aws\Api\DateTimeResult $endTime
 * @property Shapes\JobRunError $error
 * @property string $id
 * @property string $jobId
 * @property 'LINEAGE' $jobType
 * @property 'SCHEDULED'|'ON_DEMAND' $runMode
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'SCHEDULED'|'IN_PROGRESS'|'SUCCESS'|'PARTIALLY_SUCCEEDED'|'FAILED'|'ABORTED'|'TIMED_OUT'|'CANCELED' $status
 */
class GetJobRunResponse extends Response
{
}
