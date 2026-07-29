<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CancelEnrichmentJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobId
 * @property 'PENDING'|'RUNNING'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'CANCELLED' $status
 */
class CancelEnrichmentJobResponse extends Response
{
}
