<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateEnrichmentJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobId
 * @property 'PENDING'|'RUNNING'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'CANCELLED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class CreateEnrichmentJobResponse extends Response
{
}
