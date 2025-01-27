<?php

namespace Sunaoka\Aws\Structures\HealthLake\StartFHIRExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobId
 * @property 'SUBMITTED'|'QUEUED'|'IN_PROGRESS'|'COMPLETED_WITH_ERRORS'|'COMPLETED'|'FAILED'|'CANCEL_SUBMITTED'|'CANCEL_IN_PROGRESS'|'CANCEL_COMPLETED'|'CANCEL_FAILED' $JobStatus
 * @property string|null $DatastoreId
 */
class StartFHIRExportJobResponse extends Response
{
}
